<?php
namespace PHPMVC\Controllers;
use PHPMVC\Models\PrivilegeModel;
use PHPMVC\LIB\InputFilter;
use PHPMVC\LIB\Helper;
use PHPMVC\Models\UserGroupPrivilegeModel;
use PHPMVC\lib\Messenger;

class PrivilegesController extends AbstractController
{
    use InputFilter;
    use Helper;

    public function defaultAction()
    { 
        $this->language->load('privileges|default');
        $this->language->load('template|common');
        $this->_data['privileges'] = PrivilegeModel::getAll();
        $this->_view();
    }

    public function createAction()
    {
        $this->language->load('privileges|default');
        $this->language->load('privileges|labels');
        $this->language->load('template|common');
        
        if( isset($_POST['submit']) ){

            $privileges = new PrivilegeModel();

            $privileges->setPrivilege($this->filterString($_POST['PrivilegeTitle']) );
            $privileges->setPrivilegeTitle($this->filterString($_POST['Privilege']) );

            if($privileges->save()){
                $this->messenger->add('Privileges, Successfully saved.','Privileges', Messenger::APP_MESSAGE_SUCCESS);
                $this->redirect('/privileges');
            }
        }

        $this->_view();
    }

    public function editAction()
    {
        $this->language->load('privileges|default');
        $this->language->load('privileges|labels');
        $this->language->load('template|common');

        $PrivilegeId  = $this->filterInt($this->_params[0]);
        $privileges = PrivilegeModel::getByPK($PrivilegeId); 

        if($privileges === false){
            $this->redirect('/privileges');
        }

        $this->_data['privileges'] = $privileges;

        if(isset($_POST['submit'])){
            
            $privileges->setPrivilege($this->filterString($_POST['PrivilegeTitle']));
            $privileges->setPrivilegeTitle($this->filterString($_POST['Privilege']));
        
            if($privileges->save()){
                $this->messenger->add('Privileges, Successfully update.','Privileges', Messenger::APP_MESSAGE_SUCCESS);
                $this->redirect('/privileges');
            }

        }

        $this->_view();
    }

    public function deleteAction()
    {
        $PrivilegeId  = $this->filterInt($this->_params[0]);
        $privilege = PrivilegeModel::getByPK($PrivilegeId); 

        if($privilege === false){
            $this->redirect('/privileges');
        }

        $groupPrivileges = UserGroupPrivilegeModel::getBy(['PrivilegeId' => $privilege->PrivilegeId]);

        if(false !== $groupPrivileges) {
            foreach ($groupPrivileges as $groupPrivilege) {
                $groupPrivilege->delete();
            }
        }

        if($privilege->delete() === true){     
            //$_SESSION['message'] = 'Employee, '. $emp->getFirstName() . ' ' . $emp->getLastName() . ' Has delted successfully!';
            $this->redirect('/privileges');
        } 

    }
}