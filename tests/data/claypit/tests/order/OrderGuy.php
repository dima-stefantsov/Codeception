<?php //[STAMP] d9ae1e58416e1168c9f9b72f02b6f90c

// This class was automatically generated by build task
// You should not change it manually as it will be overwritten on next build
// @codingStandardsIgnoreFile


use Codeception\Module\OrderHelper;

/**
 [!] Inherited Methods
 * @method void haveFriend($name)
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
*/
class OrderGuy extends \Codeception\Actor
{
   
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\OrderHelper::failNow()
     */
    public function failNow() {
        return $this->scenario->runStep(new \Codeception\Step\Action('failNow', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\OrderHelper::writeToFile()
     */
    public function writeToFile($text) {
        return $this->scenario->runStep(new \Codeception\Step\Action('writeToFile', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\OrderHelper::appendToFile()
     */
    public function appendToFile($marker) {
        return $this->scenario->runStep(new \Codeception\Step\Action('appendToFile', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module::getName()
     */
    public function getName() {
        return $this->scenario->runStep(new \Codeception\Step\Action('getName', func_get_args()));
    }
}
