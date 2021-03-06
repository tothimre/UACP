<?php
/*Copyright 2010 Imre Toth <tothimre at gmail>

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
*/

namespace Uacp\Core\Templating;

/**
 * This class extends the template this template is required for te login 
 * process.
 *
 */
class TemplateLogin extends Template{

  /**
   * Redefines the original function, or extends it by giving more template
   * variables regarding the login process
   * @see core/templating/Template#getTemplateVars()
   */
  protected function getTemplateVars(){
    $tmplElements=parent::getTemplateVars();
    $tmplElements[TemplateInterface::USER_NAME_INDEX_FOR_HTML_FORM_INPUT]
                        = TemplateInterface::USER_NAME_VALUE_FOR_HTML_FORM_INPUT;
    $tmplElements[TemplateInterface::USER_PASS_INDEX_FOR_HTML_FORM_INPUT]
                        = TemplateInterface::USER_PASS_VALUE_FOR_HTML_FORM_INPUT;
    return $tmplElements;
  }

  public function show(){

    if($this->template==null){
      throw new Exception('Please define the template by using the 
                 setTemplate() function of this class or bassing
                 it to it\'s constructor');
    }
    return parent::show();
  }
}