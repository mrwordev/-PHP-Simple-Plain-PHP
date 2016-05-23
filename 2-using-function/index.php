<!-- This Is Comment Using HTML -->
<?php
//This Is Comment Using PHP
/*
This Is Multi Line Comment
 */

/*This Function will "Print" word jump to browser screen*/
function jump()
{
    echo "Jump";
    echo "Jump Again";
}

/*This Function will return word jump to caller*/
function returnJump()
{
    /*First return that function reach will be variable that caller get*/
    return "Jump";

    /*So this return will never be call*/
    return "Jump Again";
}
?>

<!-- This is HTML -->
<div>
	This is what you get when you call the function:<br>
	<?php
		/* If function is Global you can call it directly*/
		jump();
	?>
	<br>
	This is the result for calling function with echo
</div>
<hr />
<div>
	This is what you get when you call the function with return:<br>
	<?php
		/* Function with return need variable to store it value*/
		$result = returnJump();
		/* Left side is call "Caller", the right side is our function*/
	?>
	<br>
	It is empty!... But Why?<br>
	Becasue we have to print out the value<br>
	<?php
		/*Then We echo our result from function*/
		echo $result
	?>
	<br>
	<small>*Notice that only the first return reach is getting out from function.</small>
</div>
<hr />
<div>
	If you understand the concept, You can play with the result.<br>
	Add some style!<br>
	<strong><?php echo jump(); ?></strong>
	This is how you combine PHP with HTML!
</div>