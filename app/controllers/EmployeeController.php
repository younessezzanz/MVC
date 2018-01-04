<?php
namespace PHPMVC\Controllers;
use PHPMVC\Models\EmployeeModel;
use PHPMVC\LIB\InputFilter;
use PHPMVC\LIB\Helper;

class EmployeeController extends AbstractController
{
    use InputFilter, Helper;

    public function defaultAction()
    {  
        $this->language->load('template|common');
        $this->language->load('employee|default');

        $this->_data['employees'] = EmployeeModel::getAll();
        $this->_view();
    }

    public function notFoundAction()
    {   
        $this->language->load('template|common');
        $this->language->load('employee|default');
        $this->_view();
    }
    
    public function addAction()
    {
        $this->language->load('template|common');
        $this->language->load('employee|default');

        if(isset($_POST['submit'])){

            $employeeNumber = rand(2000, 3000);

            $emp = new EmployeeModel();

            //$emp->setEmployeeNumber($this->filterInt($employeeNumber));
            $emp->setLastName($this->filterString($_POST['lastName']));
            $emp->setFirstName($this->filterString($_POST['firstName']));
            $emp->setExtension($this->filterString($_POST['extension']));
            $emp->setEmail($this->filterEmail($_POST['email']));
            $emp->setOfficeCode($this->filterInt($_POST['officeCode']));
            $emp->setReportsTo($this->filterInt($_POST['reportsTo']));
            $emp->setJobTitle($this->filterString($_POST['jobTitle']));
            
            if($emp->save()){
                $_SESSION['message'] = 'Employee, '. $emp->getFirstName() . ' ' . $emp->getLastName() . ' Has saved!';
                $this->redirect('/employee');
            }
        }

        $this->_view();
    }

    public function editAction()
    {
        $this->language->load('template|common');
        $this->language->load('employee|default');

        $employeeNumber  = $this->filterInt($this->_params[0]);
        $emp = EmployeeModel::getByPK($employeeNumber); 

        if($emp === false){
            $this->redirect('/employee');
        }

        $this->_data['employee'] = $emp;

        if(isset($_POST['submit'])){
            
            $emp->setLastName($this->filterString($_POST['lastName']));
            $emp->setFirstName($this->filterString($_POST['firstName']));
            $emp->setExtension($this->filterString($_POST['extension']));
            $emp->setEmail($this->filterEmail($_POST['email']));
            $emp->setOfficeCode($this->filterInt($_POST['officeCode']));
            $emp->setReportsTo($this->filterInt($_POST['reportsTo']));
            $emp->setJobTitle($this->filterString($_POST['jobTitle']));

            if($emp->save()){
                $_SESSION['message'] = 'Employee, '. $emp->getFirstName() . ' ' . $emp->getLastName() . ' Has saved!';
                $this->redirect('/employee');
            }

        }

        $this->_view();
    }

    public function deleteAction()
    {
        $this->language->load('template|common');
        $this->language->load('employee|default');
        
        $employeeNumber  = $this->filterInt($this->_params[0]);
        $emp = EmployeeModel::getByPK($employeeNumber); 

        if($emp === false){
            $this->redirect('/employee');
        }

        if($emp->delete() === true){     
            $_SESSION['message'] = 'Employee, '. $emp->getFirstName() . ' ' . $emp->getLastName() . ' Has delted successfully!';
            $this->redirect('/employee');
        } 

    }

}