<?php
$students = [
           ["name"=>"ahmad","age"=>"21","grade"=>"98"],
           ["name"=>"mohamad","age"=>"23","grade"=>"85"],
           ["name"=>"ali","age"=>"22","grade"=>"76" ],
           ["name"=>"omer","age"=>"24","grade"=>"68" ],
           ["name"=>"said ","age"=>"20","grade"=>"55"]];
    function calculateStatus($grade){
        if ($grade >= 90 ){
            echo "excellent";}
        elseif ($grade >= 80){
            echo "very good";}
        elseif ($grade >= 70){
            echo "good";}
        elseif ($grade >= 60){
            echo "acceptable";}
        else {
            echo"fail";}
    };
calculateStatus(93);
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title> درجات الطلاب </title>
        <style>
        table {
              width: 25%;
              border-collapse: collapse;
              margin : 20px auto;
              text-align : center:
          }
        th , td {
            border : 1px solid #000;
            padding : 10px;
        }
        th {
            background-color :#f2f2ff;
        } 
        h2 {
            text color : #f2f2ff ;
            right margin : 50px;
             
        }
        </style>
    </head>

<body>
    <table border ="1">
         <tr>  
            <th> Name </th>
            <th> Age </th>
            <th> Grade </th>
            <th> calculateStatus </th>
        </tr>
       <?php
        $sum = 0;
        $min = 100;
        $max = 0;
        $count = 0;
        foreach ($students as $student){?>
               <tr>
                 <td>
                       <?php echo $student ["name"]?>
                 </td>
                 <td>
                       <?php echo $student ["age"]?>
                 </td>
                 <td>
                       <?php  echo $student ["grade"]?>
                 </td>
                 <td>
                       <?php echo calculateStatus ($student ["grade"])?>
                 </td>
               </tr>
        <?php
          $sum += $student["grade"];
              if ($student ["grade"]< $min){
            $min = $student["grade"];
          }
          if ($student ["grade"]> $max){
            $max = $student["grade"];
          }
          if ($student["grade"]>= 60){
            $count ++;
          }
        }
        ?>
    </table>
<h2> الاحصائيات</h2>
<p> مجموع الدرجات: <?php echo $sum ; ?></p>
<p> اقل درجة: <?php echo $min ; ?></p>
<p> اعلى درجة : <?php echo $max ; ?></p>
<p>   عدد  الناجحين :<?php echo $count ; ?></p>
</body>
</html>