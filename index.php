<?php
    
    $findLetter = 'A';
    $letterToOmit = 'A';
    $sizeOfTable = 0;
    
    if($_GET['omitLetter'] == $_GET['letterToFind'])
    {
        echo "You cannot find a letter that has also been ommitted!";
    }
    
    else
    {
        if(isset($_GET['letterToFind']))
        {
            $findLetter = $_GET['letterToFind'];
        }
        
        if(isset($_GET['omitLetter']))
        {
            $letterToOmit = $_GET['omitLetter'];
        }
        
        
        if(isset($_GET['tableSize']))
        {
            $sizeOfTable = $_GET['tableSize'];
        }
    }
    
    function createTable($findLetter, $sizeOfTable, $letterToOmit)
    {
        $letters = range("A", "Z");
        echo "<h1> <strong> Find the letter: $findLetter </strong> </h1>";
        echo "<strong> Letter omitted: $letterToOmit </strong>";
    
        $numbers = range(0, 26);
        shuffle($numbers);
        echo "<table>";
       
        for($i = 0; $i < $sizeOfTable; $i++)
        {
            echo "<tr>";
            for($j = 0; $j < $sizeOfTable; $j++)
            {
                $checkSame = 0;
                $alpha = chr(rand(65,90));
                echo "<td>";
                if($alpha == $letterToOmit)
                {
                    echo $alpha;
                }
                
                elseif($alpha == $findLetter)
                {
                    if($checkSame == 0)
                    {
                        echo $alpha;
                    }
                    else {
                    $new = $alpha;
                    echo $alpha;
                    }
                }
                
                else
                {
                    echo chr(rand(65, 90));
                }
                
                
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    
    
    
    


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset=”utf-8” />
        <title>
            Midterm
        </title>
        
        <style>
            td
            {
                font-size: 1.8em;
            }
            
            #wrap
            {
                margin: 0 auto;
                width: 800px;
                text-align: center;
            }
            
        </style>
    </head>
    
    
    <body>
        <div id = "wrap">
            <div id = "directions">
                <h1>
                    Find the Letter!
                </h1>
                
                <strong>
                    Select a letter to find!
                </strong>
                
                <form method = "getFind">
                    <select name = "letterToFind">
                        <option value = "A">A</option>
                        <option value = "B">B</option>
                        <option value = "C">C</option>
                        <option value = "D">D</option>
                        <option value = "E">E</option>
                        <option value = "F">F</option>
                        <option value = "G">G</option>
                        <option value = "H">H</option>
                        <option value = "I">I</option>
                        <option value = "J">J</option>
                        <option value = "K">K</option>
                        <option value = "L">L</option>
                        <option value = "M">M</option>
                        <option value = "N">N</option>
                        <option value = "O">O</option>
                        <option value = "P">P</option>
                        <option value = "Q">Q</option>
                        <option value = "R">R</option>
                        <option value = "S">S</option>
                        <option value = "T">T</option>
                        <option value = "U">U</option>
                        <option value = "V">V</option>
                        <option value = "W">W</option>
                        <option value = "X">X</option>
                        <option value = "Y">Y</option>
                        <option value = "Z">Z</option>
                    </select>
                    
                    <br>
                    <br>
                    
                    Select a table size
                    
                    <select name = "tableSize">
                        <option value = "6">6x6</option>
                        <option value = "7">7x7</option>
                        <option value = "8">8x8</option>
                        <option value = "9">9x9</option>
                        <option value = "10">10x10</option>
                    </select>
                    <br>
                    <br>
                    
                    Select a letter to omit:
                    <select name = "omitLetter">
                        <option value = "A">A</option>
                        <option value = "B">B</option>
                        <option value = "C">C</option>
                        <option value = "D">D</option>
                        <option value = "E">E</option>
                        <option value = "F">F</option>
                        <option value = "G">G</option>
                        <option value = "H">H</option>
                        <option value = "I">I</option>
                        <option value = "J">J</option>
                        <option value = "K">K</option>
                        <option value = "L">L</option>
                        <option value = "M">M</option>
                        <option value = "N">N</option>
                        <option value = "O">O</option>
                        <option value = "P">P</option>
                        <option value = "Q">Q</option>
                        <option value = "R">R</option>
                        <option value = "S">S</option>
                        <option value = "T">T</option>
                        <option value = "U">U</option>
                        <option value = "V">V</option>
                        <option value = "W">W</option>
                        <option value = "X">X</option>
                        <option value = "Y">Y</option>
                        <option value = "Z">Z</option>
                    </select>
                    
                    <input type="submit" value = "Create the table" name = "submit"/>
                    
                    <?php
                        createTable($findLetter, $sizeOfTable, $letterToOmit);
                    ?>
                    
                </form>
                
                Letters To Find History:
                <form>
                    <input type="submit" value = "Clear History" name="clearFormHistory"/>
                </form>
                
                <hr>
                <h1>
                    
                </h1>
            </div>
        
        </div>
        
        
    </body>
</html>