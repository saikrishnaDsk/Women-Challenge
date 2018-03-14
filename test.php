<?php

$fixedstr = "";
//echo $_POST;
foreach ($_POST as $a){
    $fixedstr = $fixedstr . $a;
}

if($fixedstr === 'https://images.petsmartassets.com/is/image/PetSmart/PB1201_STORY_CARO-Authority-HealthyOutside-DOG-20160818?$PB1201$')
{
	echo "Authority® Large Breed Mature Dog Food - Chicken & Rice<br>";
	echo "Popular dog foods recalled after euthanasia drug found in food<br>";
	echo "Authority® Large Breed Mature Dog Food - Chicken & Rice<br>";
	
}

else if($fixedstr === 'http://s3.india.com/wp-content/uploads/2018/03/shah-rukh-khan.jpg')
{
		echo "Shah Rukh Khan News: Latest News and Updates on<br>";
		echo "After Zero, Shah Rukh Khan To Begin Work On Don 3?<br>";
		echo "Shah Rukh Khan - The Indian Express<br>";
		echo "Shah Rukh Khan's Don 3 To Go On Floors Next Year Without Priyanka<br>";
		echo "Shah Rukh Khan promises to learn Bangla by next year | The Indian <br>";
		echo "Shah Rukh Khan News: Latest News and Updates on<br>";
		echo "Shah Rukh has an interesting take on Aamir's Secret Superstar<br>";

}

else if($fixedstr === 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Kitten_in_Rizal_Park%2C_Manila.jpg/345px-Kitten_in_Rizal_Park%2C_Manila.jpg')
{
		echo "Cats Quotes - BrainyQuote<br>";
		echo "50 Famous Quotes About Cats - CatTime<br>";
		echo "216 best Cat Quotes images on Pinterest | Cat quotes, Quotes about<br>";
		echo "240 Cat Quotes by QuoteSurf<br>";
		echo "Pets N More: Top Cat Quotes | THE CUTEST CAT IN THE WORLD<br>";
}
?>