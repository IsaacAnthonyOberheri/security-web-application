<?php
session_start();
session_unset();
session_destroy();

header("location:login.php");




// $sql = "INSERT INTO `student_record` (`id`, `full_names`, `sex`, `religion`, `date_of_birth`, `place_of_birth`, `l.g.a`, `state_of_origin`, `recent_schools_attended`, `current_class`, `health_challenges`, `mothers_name`, `residential_address`, `phone_number`, `guardians_name`, `guardians_address`, `guardian_phone_number`) 
// VALUES (\'1\', \'micheal Obaro\', \'Male\', \'Christian\', \'19-April-2008\', \'UBTH\', \'Oredo\', \'Edo state\', \'Negbenebor International School\', \'Pry 4\', \'None\', \'Mrs Vivian Obaro\', \'14 twisser tower\', \'08015517283\', \'Mr Ola Jones\', \'24, Ist lane of germain st, uk\', \'+442315612344\'), (\'2\', \'micheal Obaro \', \'Male\', \'Christian\', \'Dec 23, 2021\', \'St philomena teaching hospital, Benin city\', \'Ughelli North\', \'Delta state\', \'Presentation International School\', \'SSS1\', \'None\', \'Mrs Veronica\', \'33 Ibadan Express way \', \'07156845222\', \'\', \'\', \'\');";



?>