<?php
echo "da index";
function(){
        $User= App\Models\User::all();
    
        foreach ($User as $use ) {
            echo "<pre>";
            echo $user->id;
            echo "</pre>";
            
            // foreach ($productline as) {
            //     # code...
            // }
        };
    }
?>