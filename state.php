<?php
    $city=$_POST['city'];
    if($city==='Bangalore')
    {   
        $state='Karnataka';
        echo '<input type="text"  name="state"  class="state" value="'.$state.'" readonly>';
    }
    else if($city==='Indore'){
        $state='Madhyapardesh';
        echo '<input type="text"  name="state"  class="state" value="'.$state.'" readonly>';
    }
    else if($city==='Mumbai'){
        $state='Maharastra';
        echo '<input type="text"  name="state"  class="state" value="'.$state.'" readonly>';
    }
    else if($city==='Gorakhpur'){
        $state='Uttar Pradesh';
        echo '<input type="text"  name="state"  class="state" value="'.$state.'" readonly>';
    }
    

?>