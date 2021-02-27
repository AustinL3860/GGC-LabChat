<?php
$msg=$_GET["msg"];

if($msg == "0")
{
echo "GGC address is: 1000 University Center Lane | Lawrenceville, GA 30043";
}
else if($msg == "1")
{
echo "GGC telphone number is: 678.407.5000";
}
else if($msg == "2")
{
echo "GGC ITEC program is: Information technology (ITEC) is the multidisciplinary study, design, development, implementation, support or management of computer-based information systems, particularly software applications and system networks. At GGC, 
ITEC majors may focus on one of four areas: digital media, enterprise systems, software development or systems security.";
}
else if($msg == "3")
{
echo "About PHP programming: PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.
PHP is a widely-used, free, and efficient backend web development language.";
}
else if($msg == "q")
{
echo "@@@quit now@@@";
}
else
echo "<div>Welcome to GGC customer service.<br>
Please choose the following menu:<br>

0: GGC address<br>
1: GGC telphone number<br>
2: About ITEC program<br>
3: About PHP programming<br>
q: Quit chatting
</div>";



?>