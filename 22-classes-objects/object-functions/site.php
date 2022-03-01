<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Learn PHP - freeCodeCamp</title>
    </head>
    <body>

        <?php 
        
            class Student {
              var $name;
              var $major;
              var $gpa;

              function __construct($name, $major, $gpa) {
                $this->name = $name;
                $this->major = $major;
                $this->gpa = $gpa;
              }

              //* para criar object functions é o mesmo que criar functions normais
              function hasHonors() {
                  if ($this->gpa >= 3.5) {
                      return true;
                  }

                  return false;
              }
              
            }

            $student1 = new Student("Jim", "Marketing", 2.6);
            $student2 = new Student("Anaking", "AssSale", 6);

            echo $student->hasHonors();

        ?>

    </body>
</html>