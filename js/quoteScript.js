var count = 0;

var quotes = [
	"Everyone has talent. What's rare is the courage to follow it to the dark places where it leads.<br/>~ Erica Jong",
	"And the rest is rust and stardust.<br/>~ Vladimir Nabokov",
	"So many things are possible just as long as you don't know they're impossible.<br/>~ Norton Juster",
	"It's like learning to ride a unicorn. You never forget.<br/>~ Eoin Colfer",
	"A roll of the dice will never abolish chance.<br/>~ Stephane Mallarme",
	"Sin ought to be something exquisite, my dear boy.<br/>~ Emile Zola",
	"Whatever it is you're seeking won't come in the form you're expecting.<br/>~ Haruki Murakami",
	"Whatever you're meant to do, do it now. The conditions are always impossible.<br/>~ Doris Lessing",
	"A desk is a dangerous place from which to view the world.<br/>~ John le Carre",
	"It's only those who do nothing that make no mistakes, I suppose.<br/>~ Joseph Conrad",
	"The unfed mind devours itself.<br/>~ Gore Vidal",
	"Morning is wonderful. Its only drawback is that it comes at such an inconvenient time of day.<br/>~ Glen Cook",
	"As he caught his footing, his head fell back, and the Milky Way flowed down inside him with a roar.<br/>~ Yasunari Kawabata"
];

var interval = setInterval(auto, 7000);

function auto()
  {
    count++;
    if (count == quotes.length)
       count = 0;
    document.getElementById('changeQuote').innerHTML = quotes[count];    
  }