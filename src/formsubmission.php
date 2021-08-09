<?php

abstract class FormSubmit
{
    abstract protected function submitForm();

    /**
     * instantiate object from form field data
     * @param array Form Post Data
     */
    public function __construct(array $data)
    {
        foreach ($data as $field => $input) {
            $this->{$field} = $input;
        }
    }

    /**
     * checks if each field is empty, if so adds it to an array
     * @return array Array of empty fields (true), or an empty array (false)
     */

     public function hasEmptyFields()
     {
         $emptyFields = [];

         foreach ($this as $field => $value) {
             if (empty($value) && $value !== 0) {
                 $emptyFields[] = $field;
             }
         }

         return $emptyFields;
     }

     /**
      * checks whether the supplied email is valid 
      * @return bool Email is (not) valid 
      */
      public function isValidEmail()
      {
          return filter_var($this->email, FILTER_VALIDATE_EMAIL);
      }

      /**
       * Returns value of given property
       * @param string Name of property
       * @return string|int Value of property
       */
      public function getValue(string $prop)
      {
          return $this->{$prop};
      }
}