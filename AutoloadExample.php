<?php

namespace entero\\datepair\;

use entero\DatePairAsset;

/**
 * This is just an example.
 */
class AutoloadExample extends \yii\base\Widget
{
    public function init()
    {

        $this->registerJs();
        $this->registerAssets();

    }
    public function registerAssets()
    {
        DatePairAsset::register($this->getView());
    }


    public function registerJs()
    {
        $js ="var defaultDeltaExampleEl = document.getElementById('defaultDeltaExample');
var defaultDeltaDatepair = new Datepair(defaultDeltaExampleEl, {
    'defaultDateDelta': 1,      // days
    'defaultTimeDelta': 7200000 // milliseconds
});";
        $this->getView()->registerJs($js);
    }
    public function run()
    {
        return "Hello!";
    }
}
