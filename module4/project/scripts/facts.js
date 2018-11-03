var facts = [
	'It would only cost about $140 a year to eat ramen for every meal.',
	'The first instant ramen was considered a luxury item.',
	'Ramen noodles were the first ever noodles consumed in space.',
	'One pack of ramen will bring you well over half the daily recommended amount of sodium.',
	'Ramen is the Japanese pronunciation of the Chinese word lamein.',
	'China consumes the most instant ramen.',
	'In Japan, there are at least 22 different styles.',
	'Momofuku Andu invented the idea of instant ramen.',
	'The noodle length inside an instant ramen packet is 51 meters.',
	'Miso ramen was born in Sapporo, Japan around the mid-1950s.',
	'Today, there are over 35,000 ramen noodle restaurants in Japan!',
	'There are four major kinds of Japanese noodles: Somen, Udon, Soba and Ramen.',
	'Asian noodles are kneaded, often by hand, and then stretched and pulled into thin threads or rolled or sliced into flat ribbons.',
	'A 4,000 year old bowl of noodles was unearthed in China.',
	'Noodles were first found in a Chinese cookbook during the Eastern Han period (25CE-220CE).'
]

function newFact() {
	var randomNumber = Math.floor(Math.random() * (facts.length));
	document.getElementById('facts').innerHTML = facts[randomNumber];
}
newFact();
