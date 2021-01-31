<!--page je stranica za admina,home uvek vodi do main stranice koja je vidljiva za sve korisnike-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMDB</title>
    <link rel="stylesheet"href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" ></script>
</head>
<body>
<div class="wrapper">
<nav class="navbar navbar-expand-lg navbar-light ">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav">
        <li class="nav-item ">
          <li class="nav-item ">
            <a class="nav-link" href="main.php">Home </a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="admin/newMovie.php">Add new movie</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="admin/updateInfo.php">Update information</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#about">Delete movies</a>
          </li>
          <a class="nav-link" href="login.php">Logout</a>
          </li>
          

        </ul>
      </div>
    </nav>
      
</div>
  
<div class="row">
  <div class="column" onclick="openTab('b1');" style="background:white;">
  <h5>Léon</h5>
    <img src="slike/leon.jpg" alt="product1" class="img-fluid">  
  </div>
  <div class="column" onclick="openTab('b2');" style="background:white;">
  <h5>Intouchables</h5>
  <img src="slike/into.jpg" alt="product1" class="img-fluid">
  </div>
  <div class="column" onclick="openTab('b3');" style="background:white;">
  <h5>Forrest Gump</h5>
  <img src="slike/forrest.jpg" alt="product1" class="img-fluid">
  </div>
  <div class="column" onclick="openTab('b4');" style="background:white;">
  <h5>Blended</h5>
  <img src="slike/blended.jpg" alt="product1" class="img-fluid">
  </div>
  <div class="column" onclick="openTab('b5');" style="background:white;">
  <h5>Just Go with It</h5>
  <img src="slike/just.jpg" alt="product1" class="img-fluid">
  </div>
  <div class="column" onclick="openTab('b6');" style="background:white;">
  <h5>The Ugly Truth</h5>
  <img src="slike/ugly.jpg" alt="product1" class="img-fluid">
  </div>
  <div class="column" onclick="openTab('b7');" style="background:white;">
  <h5>The Matrix</h5>
  <img src="slike/matrix.jpg" alt="product1" class="img-fluid">
  </div>
  <div class="column" onclick="openTab('b8');" style="background:white;">
  <h5>The Lord of the Rings: The Fellowship of the Ring</h5>
  <img src="slike/lord.jpg" alt="product1" class="img-fluid">
  </div>
  <div class="column" onclick="openTab('b9');" style="background:white;">
  <h5>The Shawshank Redemption</h5>
  <img src="slike/prison.jpg" alt="product1" class="img-fluid">
  </div>
  <div class="column" onclick="openTab('b10');" style="background:white;">
  <h5>The Cobbler</h5>
  <img src="slike/shoes.jpg" alt="product1" class="img-fluid">
  </div>
  <div class="column" onclick="openTab('b11');" style="background:white;">
  <h5>Murder Mystery</h5>
  <img src="slike/mystery.jpg" alt="product1" class="img-fluid">
  </div>
  <div class="column" onclick="openTab('b12');" style="background:white;">
  <h5>The Bounty Hunter</h5>
  <img src="slike/hunter.jpg" alt="product1" class="img-fluid">
  </div>
  <div class="column" onclick="openTab('b13');" style="background:white;">
  <h5>Dresses</h5>
  <img src="slike/27.jpg" alt="product1" class="img-fluid">
  </div>
  <div class="column" onclick="openTab('b14');" style="background:white;">
  <h5>The Age of Adaline</h5>
  <img src="slike/addelin.jpg" alt="product1" class="img-fluid">
  </div>
  <div class="column" onclick="openTab('b15');" style="background:white;">
  <h5>Run</h5>
  <img src="slike/run.jpg" alt="product1" class="img-fluid">
  </div>
  <div class="column" onclick="openTab('b16');" style="background:white;">
  <h5>Psycho Goreman</h5>
  <img src="slike/goreman.jpg" alt="product1" class="img-fluid">
  </div>
  <div class="column" onclick="openTab('b17');" style="background:white;">
  <h5>Shadow in the Cloud</h5>
  <img src="slike/shadow.jpg" alt="product1" class="img-fluid">
  </div>
  <div class="column" onclick="openTab('b18');" style="background:white;">
  <h5>You've Got Mail</h5>
  <img src="slike/mail.jpg" alt="product1" class="img-fluid">
  </div>
  <div class="column" onclick="openTab('b19');" style="background:white;">
  <h5>Notting Hill</h5>
  <img src="slike/hill.jpg" alt="product1" class="img-fluid">
  </div>
  <div class="column" onclick="openTab('b20');" style="background:white;">
  <h5>A Walk to Remember </h5>
  <img src="slike/remember.jpg" alt="product1" class="img-fluid">
  </div>
  <div class="column" onclick="openTab('b21');" style="background:white;">
  <h5>The terminal</h5>
  <img src="slike/terminal.jpg" alt="product1" class="img-fluid">
  </div>
  <div class="column" onclick="openTab('b22');" style="background:white;">
  <h5>The Bourne Identity</h5>
  <img src="slike/bourne.jpg" alt="product1" class="img-fluid">
  </div>
  <div class="column" onclick="openTab('b23');" style="background:white;">
  <h5>Mission: Impossible - Ghost Protocol</h5>
  <img src="slike/mision.jpg" alt="product1" class="img-fluid">
  </div>
  <div class="column" onclick="openTab('b24');" style="background:white;">
  <h5>Tenet</h5>
  <img src="slike/tenet.jpg" alt="product1" class="img-fluid">
  </div>
  <div class="column" onclick="openTab('b25');" style="background:white;">
  <h5>Skyfall </h5>
  <img src="slike/skyfall.jpg" alt="product1" class="img-fluid">
  </div>
  <div class="column" onclick="openTab('b26');" style="background:white;">
  <h5>The Karate Kid</h5>
  <img src="slike/kid.jpg" alt="product1" class="img-fluid">
  </div>
  <div class="column" onclick="openTab('b27');" style="background:white;">
  <h5>The Lion King</h5>
  <img src="slike/lion.jpg" alt="product1" class="img-fluid">
  </div>
  <div class="column" onclick="openTab('b28');" style="background:white;">
  <h5>Toy Story 4</h5>
  <img src="slike/toy.jpg" alt="product1" class="img-fluid">
  </div>
  <div class="column" onclick="openTab('b29');" style="background:white;">
  <h5>Monsters University</h5>
  <img src="slike/monsters.jpg" alt="product1" class="img-fluid">
</div>


</div>

<!-- Full-width columns: (hidden by default) -->
<div id="b1" class="containerTab" style="display:none;background:green">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Léon</h2>
  <p>1h 50min | Action, Crime, Drama | 14 September 1994 (France)</p>
  <p>Mathilda, a 12-year-old girl, is reluctantly taken in by Léon, a professional assassin, after her family is murdered. An unusual relationship forms as she becomes his protégée and learns the assassin's trade.</p>
  <p>Director: Luc Besson</p>
  <p>Writer: Luc Besson</p>
  <p>Stars: Jean Reno, Gary Oldman, Natalie Portman</p>
</div>
<div id="b2" class="containerTab" style="display:none;background:blue">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Intouchables</h2>
  <p>1h 52min | Biography, Comedy, Drama | 24 May 2011 France</p>
  <p>After he becomes a quadriplegic from a paragliding accident, an aristocrat hires a young man from the projects to be his caregiver.</p>
  <p>Directors: Olivier Nakache, Éric Toledano</p>
  <p>Writers: Olivier Nakache, Philippe Pozzo di Borgo (adapted from his autobiographical tale Le Second Souffle) </p>
  <p>Stars: François Cluzet, Omar Sy, Anne Le Ny</p>
</div>
<div id="b3" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Forrest Gump</h2>
  <p>2h 22min | Drama, Romance | 6 July 1994 (USA)</p>
  <p>The presidencies of Kennedy and Johnson, the events of Vietnam, Watergate and other historical events unfold through the perspective of an Alabama man with an IQ of 75, whose only desire is to be reunited with his childhood sweetheart.</p>
  <p>Director: Robert Zemeckis</p>
  <p>Writers: Winston Groom (novel), Eric Roth (screenplay)</p>
  <p>Stars: Tom Hanks, Robin Wright, Gary Sinise</p>
</div>

<div id="b4" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Blended</h2>
  <p>1h 57min | Comedy, Romance | 3 July 2014 USA</p>
  <p>After a bad blind date, a man and woman find themselves stuck together at a resort for families, where their attraction grows as their respective kids benefit from the burgeoning relationship.</p>
  <p>Director: Frank Coraci</p>
  <p>Writers: Ivan Menchell, Clare Sera</p>
  <p>Stars:Adam Sandler, Drew Barrymore, Wendi McLendon-Covey</p>
</div>

<div id="b5" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Just Go with It</h2>
  <p>1h 57min | Comedy, Romance | 11 February 2011 (USA)</p>
  <p>On a weekend trip to Hawaii, a plastic surgeon convinces his loyal assistant to pose as his soon-to-be-divorced wife in order to cover up a careless lie he told to his much-younger girlfriend.</p>
  <p>Director: Dennis Dugan</p>
  <p>Writers: Allan Loeb (screenplay), Timothy Dowling (screenplay)</p>
  <p>Stars: Adam Sandler, Jennifer Aniston, Brooklyn Decker</p>
</div>
<div id="b6" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>The Ugly Truth</h2>
  <p>1h 36min | Comedy, Romance | 24 July 2009 (USA)</p>
  <p>An uptight television producer takes control of a morning show segment on modern relationships hosted by a misogynistic man.</p>
  <p>Director: Robert Luketic</p>
  <p>Writers: Nicole Eastman (screenplay), Karen McCullah (screenplay)</p>
  <p>Stars: Katherine Heigl, Gerard Butler, Bree Turner</p>
</div>

<div id="b7" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>The Matrix</h2>
  <p>2h 16min | Action, Sci-Fi | 31 March 1999 (USA)</p>
  <p>When a beautiful stranger leads computer hacker Neo to a forbidding underworld, he discovers the shocking truth--the life he knows is the elaborate deception of an evil cyber-intelligence.</p>
  <p>Directors: Lana Wachowski (as The Wachowski Brothers), Lilly Wachowski (as The Wachowski Brothers)</p>
  <p>Writers: Lilly Wachowski (as The Wachowski Brothers), Lana Wachowski (as The Wachowski Brothers)</p>
  <p>Stars: Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss</p>
</div>
<div id="b8" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>The Lord of the Rings: The Fellowship of the Ring</h2>
  <p>2h 58min | Action, Adventure, Drama | 19 December 2001 (USA)</p>
  <p>A meek Hobbit from the Shire and eight companions set out on a journey to destroy the powerful One Ring and save Middle-earth from the Dark Lord Sauron.</p>
  <p>Director: Peter Jackson</p>
  <p>Writers: J.R.R. Tolkien (novel), Fran Walsh (screenplay)</p>
  <p>Stars: Elijah Wood, Ian McKellen, Orlando Bloom</p>
</div>

<div id="b9" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>The Shawshank Redemption</h2>
  <p>2h 22min | Drama | 14 October 1994 (USA)</p>
  <p>Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.</p>
  <p>Director: Frank Darabont</p>
  <p>Writers:Stephen King (short story "Rita Hayworth and Shawshank Redemption"), Frank Darabont (screenplay)</p>
  <p>Stars: Tim Robbins, Morgan Freeman, Bob Gunton</p>
</div>
<div id="b10" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>The Cobbler</h2>
  <p>1h 39min | Comedy, Drama, Fantasy | 13 March 2015 (USA)</p>
  <p>A cobbler, bored of his everyday life, stumbles upon a magical heirloom that allows him to become other people and see the world in a different way.</p>
  <p>Director: Robert Zemeckis</p>
  <p>Writers: Tom McCarthy</p>
  <p>Stars:  Tom McCarthy, Paul Sado</p>
</div>
<div id="b11" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Murder Mystery</h2>
  <p>1h 37min | Action, Comedy, Crime | 14 June 2019 (USA)</p>
  <p>A New York cop and his wife go on a European vacation to reinvigorate the spark in their marriage, but end up getting framed and on the run for the death of an elderly billionaire.</p>
  <p>Director: Kyle Newacheck</p>
  <p>Writers: Winston Groom (novel), Eric Roth (screenplay)</p>
  <p>Stars:  Adam Sandler, Jennifer Aniston, Luke Evans</p>
</div>
<div id="b12" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>The Bounty Hunter</h2>
  <p> 1h 50min | Action, Comedy, Romance | 22 April 2010  USA</p>
  <p>A bounty hunter learns that his next target is his ex-wife, a reporter working on a murder cover-up. Soon after their reunion, the always-at-odds duo find themselves on a run-for-their-lives adventure.</p>
  <p>Director: Andy Tennant</p>
  <p>Writers: Sarah Thorp</p>
  <p>Stars:  Jennifer Aniston, Gerard Butler, Gio Perez</p>
</div>
 
<div id="b13" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Dresses</h2>
  <p>1h 51min | Comedy, Romance | 21 February 2008  USA</p>
  <p>After serving as a bridesmaid 27 times, a young woman wrestles with the idea of standing by her sister's side as her sibling marries the man she's secretly in love with.</p>
  <p>Director: Anne Fletcher</p>
  <p>Writer: Aline Brosh McKenna</p>
  <p>Stars: Katherine Heigl, James Marsden, Malin Akerman </p>
</div>
<div id="b14" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>The Age of Adaline</h2>
  <p> 1h 52min | Drama, Fantasy, Romance | 30 April 2015(USA)</p>
  <p>A young woman, born at the turn of the 20th century, is rendered ageless after an accident. After many solitary years, she meets a man who complicates the eternal life she has settled into.</p>
  <p>Director: Lee Toland Krieger</p>
  <p>Writers:  J. Mills Goodloe (screenplay by), Salvador Paskowitz (screenplay by)</p>
  <p>Stars: Blake Lively, Michiel Huisman, Harrison Ford</p>
</div>
<div id="b15" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Run</h2>
  <p>1h 30min | Horror, Mystery, Thriller | 20 November 2020 (USA)</p>
  <p>A homeschooled teenager begins to suspect her mother is keeping a dark secret from her.</p>
  <p>Director: Aneesh Chaganty</p>
  <p>Writers: Aneesh Chaganty, Sev Ohanian</p>
  <p>Stars: Sarah Paulson, Kiera Allen, Sara Sohn</p>
</div>

<div id="b16" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Psycho Goreman</h2>
  <p>1h 35min | Comedy, Horror, Sci-Fi | 22 January 2021 (Canada)</p>
  <p>After unearthing a gem that controls an evil monster looking to destroy the Universe, a young girl and her brother use it to make him do their bidding.</p>
  <p>Director: Steven Kostanski </p>
  <p>Writers: Steven Kostanski</p>
  <p>Stars:Matthew Ninaber, Kristen MacCulloch, Rick Amsbury</p>
</div>
<div id="b17" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Shadow in the Cloud</h2>
  <p>1h 23min | Action, Horror, War | 1 January 2021 (USA)</p>
  <p>A female WWII pilot traveling with top secret documents on a B-17 Flying Fortress encounters an evil presence on board the flight.</p>
  <p>Director: Roseanne Liang</p>
  <p>Writers: Max Landis, Roseanne Liang</p>
  <p>Stars:Chloë Grace Moretz, Nick Robinson, Beulah Koale</p>
</div> 
<div id="b18" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>You've Got Mail</h2>
  <p>1h 59min | Comedy, Drama, Romance | 18 December 1998 (USA)</p>
  <p>Book superstore magnate, Joe Fox and independent book shop owner, Kathleen Kelly fall in love in the anonymity of the Internet both blissfully unaware that he's trying to put her out of business.</p>
  <p>Director: Nora Ephron</p>
  <p>Writers:Miklós László (play) (as Nikolaus Laszlo), Nora Ephron (screenplay) )</p>
  <p>Stars: Tom Hanks, Meg Ryan, Greg Kinnear</p>
</div>
<div id="b18" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Forrest Gump</h2>
  <p>2h 22min | Drama, Romance | 6 July 1994 (USA)</p>
  <p>The presidencies of Kennedy and Johnson, the events of Vietnam, Watergate and other historical events unfold through the perspective of an Alabama man with an IQ of 75, whose only desire is to be reunited with his childhood sweetheart.</p>
  <p>Director: Robert Zemeckis</p>
  <p>Writers: Winston Groom (novel), Eric Roth (screenplay)</p>
  <p>Stars: Tom Hanks, Robin Wright, Gary Sinise</p>
</div>
<div id="b19" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Notting Hill</h2>
  <p>2h 4min | Comedy, Drama, Romance  21 May 1999 (UK)</p>
  <p>The life of a simple bookshop owner changes when he meets the most famous film star in the world.</p>
  <p>Director: Roger Michell</p>
  <p>Writers: Richard Curtis</p>
  <p>Stars: Hugh Grant, Julia Roberts, Richard McCabe</p>
</div>

<div id="b20" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>A Walk to Remember </h2>
  <p>2h 22min | Drama, Romance | 6 July 1994 (USA)</p>
  <p>The story of two North Carolina teens, Landon Carter and Jamie Sullivan, who are thrown together after Landon gets into trouble and is made to do community service.</p>
  <p>Director: Adam Shankman</p>
  <p>Writers:  Nicholas Sparks (novel), Karen Janszen (screenplay)</p>
  <p>Stars: Mandy Moore, Shane West, Peter Coyote</p>
</div>
<div id="b21" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>The terminal</h2>
  <p>2h 8min | Comedy, Drama, Romance | 18 June 2004 (USA)</p>
  <p>An Eastern European tourist unexpectedly finds himself stranded in JFK airport, and must take up temporary residence there.</p>
  <p>Director: Steven Spielberg</p>
  <p>Writers: Andrew Niccol (story), Sacha Gervasi (story)</p>
  <p>Stars: Tom Hanks, Catherine Zeta-Jones, Chi McBride </p>
</div>
<div id="b22" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>The Bourne Identity</h2>
  <p> 1h 59min | Action, Mystery, Thriller | 14 June 2002 (USA)</p>
  <p>A man is picked up by a fishing boat, bullet-riddled and suffering from amnesia, before racing to elude assassins and attempting to regain his memory.</p>
  <p>Director:  Doug Liman</p>
  <p>Writers: Tony Gilroy (screenplay), W. Blake Herron (screenplay) (as William Blake Herron)</p>
  <p>Stars: Franka Potente, Matt Damon, Chris Cooper </p>
</div>
<div id="b23" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Mission: Impossible - Ghost Protocol</h2>
  <p>2h 12min | Action, Adventure, Thriller | 21 December 2011 (USA)</p>
  <p>The IMF is shut down when it's implicated in the bombing of the Kremlin, causing Ethan Hunt and his new team to go rogue to clear their organization's name.</p>
  <p>Director:  Brad Bird</p>
  <p>Writers: Bruce Geller (television series "Mission: Impossible"), Josh Appelbaum </p>
  <p>Stars: Tom Cruise, Jeremy Renner, Simon Pegg</p>
</div>
<div id="b24" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Tenet</h2>
  <p>2h 30min | Action, Sci-Fi, Thriller | 3 September 2020 (USA)</p>
  <p>Armed with only one word, Tenet, and fighting for the survival of the entire world, a Protagonist journeys through a twilight world of international espionage on a mission that will unfold in something beyond real time.</p>
  <p>Director: Christopher Nolan</p>
  <p>Writers: Christopher Nolan</p>
  <p>Stars:John David Washington, Robert Pattinson, Elizabeth Debicki</p>
</div>
<div id="b25" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Skyfall </h2>
  <p>2h 23min | Action, Adventure, Thriller | 31 October 2012 (USA)</p>
  <p>The presidencies of Kennedy and Johnson, the events of Vietnam, Watergate and other historical events unfold through the perspective of an Alabama man with an IQ of 75, whose only desire is to be reunited with his childhood sweetheart.</p>
  <p>Director:  Sam Mendes</p>
  <p>Writers: Neal Purvis, Robert Wade</p>
  <p>Stars:  Daniel Craig, Javier Bardem, Naomie Harris </p>
</div>
<div id="b26" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>The Karate Kid</h2>
  <p>2h 6min | Action, Drama, Family | 22 June 1984 (USA)</p>
  <p>A martial arts master agrees to teach karate to a bullied teenager.</p>
  <p>Director: John G. Avildsen</p>
  <p>Writers: Robert Mark Kamen</p>
  <p>Stars: Tom Hanks, Robin Wright, Gary Sinise< Ralph Macchio, Pat Morita, Elisabeth Shue </p>
</div>
<div id="b27" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>The Lion King</h2>
  <p>1h 58min | Animation, Adventure, Drama | 19 July 2019 (USA)</p>
  <p>After the murder of his father, a young lion prince flees his kingdom only to learn the true meaning of responsibility and bravery.</p>
  <p>Director:Jon Favreau</p>
  <p>Writers: Jeff Nathanson (screenplay by), Irene Mecchi (based on "The Lion King" screenplay by)</p>
  <p>Stars:  Donald Glover, Beyoncé, Seth Rogen </p>
</div>
<div id="b28" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Toy Story 4 </h2>
  <p>1h 40min | Animation, Adventure, Comedy | 21 June 2019 (USA)</p>
  <p>When a new toy called "Forky" joins Woody and the gang, a road trip alongside old and new friends reveals how big the world can be for a toy.</p>
  <p>Director: Josh Cooley </p>
  <p>Writers: John Lasseter (original story by), Andrew Stanton (original story by)</p>
  <p>Stars: Tom Hanks, Tim Allen, Annie Potts </p>
</div>
<div id="b29" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Monsters University</h2>
  <p>1h 44min | Animation, Adventure, Comedy | 20 June 2013 (USA)</p>
  <p>A look at the relationship between Mike Wazowski (Billy Crystal) and James P. "Sully" Sullivan (John Goodman) during their days at Monsters University, when they weren't necessarily the best of friends.</p>
  <p>Director: Dan Scanlon</p>
  <p>Writers: Dan Scanlon(story by), Daniel Gerson (story by) </p>
  <p>Stars: Billy Crystal, John Goodman, Steve Buscemi  </p>
</div>

</div>

<script src="js/mainpage.js"></script>


</body>
</html>