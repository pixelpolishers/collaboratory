<?php
/**
 * This file is part of Collaboratory (https://github.com/nextphp/collaboratory)
 *
 * @link      https://github.com/nextphp/collaboratory for the canonical source repository
 * @copyright Copyright (c) 2012 nextphp (https://github.com/nextphp)
 * @license   For the full copyright and license information, view the LICENSE file.
 * @package   Collaboratory
 */

namespace CollabUser\Controller;

use CollabUser\Entity\SshKey;
use CollabUser\Form\AddSshForm;
use CollabUser\Form\LoginForm;
use DateTime;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class UserController extends AbstractActionController
{
    private $sshService;

    private function getSshService()
    {
        if ($this->sshService === null) {
            $this->sshService = $this->getServiceLocator()->get('ssh.service');
        }
        return $this->sshService;
    }

    public function profileAction()
    {
        $form = new \Application\Form\ProfileForm();

        $viewModel = new ViewModel();
        $viewModel->setVariable('form', $form);
        return $viewModel;
    }

    public function loginAction()
    {
        $form = new LoginForm();

        $request = $this->getRequest();
        if ($request->isPost()) {
            $form->setData($request->getPost());

            if ($form->isValid()) {
                $adapter = $this->userAuthentication()->getAuthAdapter();
                $auth = $this->userAuthentication()->getAuthService()->authenticate($adapter);

                if (!$auth->isValid()) {
                    $this->flashMessenger()->setNamespace('zfcuser-login-form')->addMessage($this->failedLoginMessage);
                    $adapter->resetAdapters();
                    return $this->redirect()->toUrl($this->url()->fromRoute('zfcuser/login').($redirect ? '?redirect='.$redirect : ''));
                }
                return $this->redirect()->toRoute('dashboard');
            }
        }

        $viewModel = new ViewModel();
        $viewModel->setVariable('form', $form);
        return $viewModel;
    }

    public function logoutAction()
    {
        $this->userAuthentication()->getAuthAdapter()->resetAdapters();
        $this->userAuthentication()->getAuthService()->clearIdentity();

        return $this->redirect()->toRoute('user/login');
    }

    public function sshAction()
    {

    }

    public function sshAddAction()
    {
        $form = new AddSshForm();

        $request = $this->getRequest();
        if ($request->isPost()) {
            $sshKey = new SshKey();

            $form->bind($sshKey);
            $form->setData($request->getPost());

            if ($form->isValid()) {
                $sshKey->setCreatedBy(1);
                $sshKey->setCreatedOn(new DateTime());

                $this->getSshService()->persist($sshKey);
                return $this->redirect()->toRoute('account/ssh');
            }
        }

        $viewModel = new ViewModel();
        $viewModel->setVariable('form', $form);
        $viewModel->setTerminal($request->isXmlHttpRequest());
        return $viewModel;
    }

}
