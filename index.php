<?php
$date =  date('Y-m-d', time());
$word = "hi it has been a high time that i see you";

echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";
$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of  \$year: ";
print_r($year);
{
echo "<br> <br>1. I have Replaced '-' with '/' in new date <br>";
$date1 = str_replace("-", "/","$date");
echo "The value new date is of \$date: ".$date1."<br>";
echo "<br>";
}
{
echo "2.To compare date & tar and print accordingly";
if (strcmp($date1, $tar) > 0)
	echo "<br> The future<br><br>";
elseif  (strcmp($date1, $tar) < 0)
	echo "<br> The past";
else  echo "<br> oops";
}
echo "3. Print the position of / in earlier date <br>";
for($i=0;$i<strlen($date1);$i++)
{
if($date1[$i]=='/')
{
echo " ".$i; 
}
}
{
echo "<br><br>4.To print number of words in the date and print it";
echo "<br>" .str_word_count($date);
}
{
echo "<br><br>#<u> Hey it has been a long time since I last saw you</u>"."<br>";
echo "5.The length of this sentence is:";
echo strlen($word)."<br>";
}
{
echo "<br>6. ASCII value of first character of above underlined sentence is";
echo "<br>" .ord ($word)."<br>";
}
{
echo "<br>7. To return the last two charcters of date";
echo "<br>".substr("$date", -2);
}
echo "<br> 8.Convert date into array & delimit '/' it with space<br>";
$dateElements=explode("/",$date1);
for($i=0;$i<count($dateElements);$i++)
{
echo $dateElements[$i]." ";
}
echo "<br>";

findLeapYearforeach($year);
findLeapYearwhile($year);
function findLeapYearforeach($year)
{
echo "<br>9. Done with FOREACH function<br>";
foreach($year as $value)
{
if(((int)$value)%4==0)
{
echo "$value True ,";
}
else
{
echo "$value False ,";
}
}
}

function findLeapYearwhile($year)
{
echo "<br><br>10.Done with WHILE function<br>";
$i=0;
while($i<count($year))

{
if(((int)$year[$i])%4==0)
{
echo "$year[$i] True ,";
}
else
{
echo "$year[$i] False ,";
}
++$i;

//echo "<br>";
}
}

$tempoutput = "";
echo "<br><br> 10. Printing the value using switch case<br>";
foreach ($year as $value)
        {
            switch ($value)
            {
                case ($value%4 == 0):
                    {
                        $tempoutput .= "  $value True , ";
                        break;
                    }
                case ($value%4 != 0):
                    {
                        $tempoutput .= "  $value False ,";
                        break;
                    }
            }
        }
        echo " $tempoutput <br><br>";

echo "End of the program";

?>
