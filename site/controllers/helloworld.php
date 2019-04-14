<?php

defined('_JEXEC') or die('Restricted access');

class HelloWorldControllerHelloWorld extends JControllerForm
{   
	public function getModel($name = 'Helloworld', $prefix = 'HelloWorldModel', $config = array('ignore_request' => true))
    {
        return parent::getModel($name, $prefix, array('ignore_request' => false));
    }

	public function save($key = null, $urlVar = null)
    {
		// Check for request forgeries.
		JSession::checkToken() or jexit(JText::_('JINVALID_TOKEN'));
        
		$app = JFactory::getApplication('site'); 
		$input = $app->input; 
		$model = $this->getModel('helloworld');
        
		
		// Get the current URI to set in redirects. As we're handling a POST, 
		// this URI comes from the <form action="..."> attribute in the layout file above
		$currentUri = (string)JUri::getInstance();

        
		// get the data from the HTTP POST request
		$data  = $input->get('jform', array(), 'array');
        
		// set up context for saving form data
		$context = "$this->option.edit.$this->context"; //SUnday1
        
		// Validate the posted data.
		// First we need to set up an instance of the form ...
		$form = $model->getForm();//$form = $model->getForm($data, false);	//Sunday2

		if (!$form)
		{
			$app->enqueueMessage($model->getError(), 'error');
			return false;
		}

		// ... and then we validate the data against it
		// The validate function called below results in the running of the validate="..." routines
		// specified against the fields in the form xml file, and also filters the data 
		// according to the filter="..." specified in the same place (removing html tags by default in strings)
		$validData = $model->validate($form, $data);

		// Handle the case where there are validation errors
		if ($validData === false)
		{
			// Get the validation messages.
			$errors = $model->getErrors();

			// Display up to three validation messages to the user.
			for ($i = 0, $n = count($errors); $i < $n && $i < 3; $i++)
			{
				if ($errors[$i] instanceof Exception)
				{
					$app->enqueueMessage($errors[$i]->getMessage(), 'warning');
				}
				else
				{
					$app->enqueueMessage($errors[$i], 'warning');
				}
			}

			// Save the form data in the session.
			$app->setUserState($context . '.data', $data);

			// Redirect back to the same screen.
			$this->setRedirect($currentUri);

			return false;
		}
        					// // add the 'created by' and 'created' date fields
							// $validData['created_by'] = JFactory::getUser()->get('id', 0);
							// $validData['created'] = date('Y-m-d h:i:s');
        
		// Attempt to save the data.
		if (!$model->save($validData))
		{
		// Handle the case where the save failed
            
			// Save the data in the session.
			$app->setUserState($context . '.data', $validData);

			// Redirect back to the edit screen.
			$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_SAVE_FAILED', $model->getError()));
			$this->setMessage($this->getError(), 'error');

			$this->setRedirect($currentUri);

			return false;
		}
        
		// clear the data in the form
		$app->setUserState($context . '.data', null);     
        
		$this->setRedirect(
				$currentUri,
				JText::_('Form submitted!')
				);
            
		return true;
    }
	
	// public function saving(){
		// $app 	= JFactory::getApplication();
		// $input 	= $app->input; 
		// $currentUri = (string)JUri::getInstance();
		
		// $model	= $this->getModel('Submission');
		// $data  = $input->get('jform', array(), 'array');
		
        // // Validate the posted data.
		// // First we need to set up an instance of the form ...
		// $form = $model->getForm();//$form = $model->getForm($data, false);
		// $tmp = $model->uploadForm();
		
		// $this->setRedirect($currentUri);
	// }
	

}