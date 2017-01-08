CREATE DATABASE  IF NOT EXISTS `moviegallery` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `moviegallery`;
-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Янв 08 2017 г., 22:17
-- Версия сервера: 10.1.19-MariaDB
-- Версия PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `moviegallery`
--

-- --------------------------------------------------------

--
-- Структура таблицы `artist`
--

CREATE TABLE `artist` (
  `artistId` int(10) UNSIGNED NOT NULL,
  `firstName` char(30) NOT NULL,
  `lastName` char(30) NOT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `nationality` char(30) DEFAULT NULL,
  `otherInfo` text,
  `artistImage` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `artist`
--

INSERT INTO `artist` (`artistId`, `firstName`, `lastName`, `dateOfBirth`, `nationality`, `otherInfo`, `artistImage`) VALUES
(1, 'Edward', 'Norton', '1969-08-18', 'USA', 'Edward Harrison Norton is an American actor, filmmaker and activist. He has been nominated for three Academy Awards for his work in the films Primal Fear, American History X and Birdman. ', '/template/images/artists/1.jpg'),
(2, 'Edward', 'Furlong', '1977-08-02', 'USA', 'Edward Walter Furlong is an American actor and musician. A former child star, Furlong won Saturn and MTV Movie Awards for his breakthrough performance as John Connor in Terminator 2: Judgment Day. ', '/template/images/artists/2.jpg'),
(3, 'Beverly', 'D''Angelo', '1951-11-15', 'USA', 'Beverly Heather D''Angelo (born November 15, 1951) is an American actress and singer, who starred as Ellen Griswold in the National Lampoon''s Vacation films (1983–2015).[1] She has appeared in over 60 films and was nominated for a Golden Globe Award for her role as Patsy Cline in Coal Miner''s Daughter (1980), and for an Emmy Award for her role as Stella Kowalski in the TV film A Streetcar Named Desire (1984). ', '/template/images/artists/3.jpg'),
(4, 'Matthew', 'McConaughey', '1969-11-04', 'USA', 'Matthew McConaughey is an American actor and producer. He first gained notice for his breakout role in the coming-of-age comedy Dazed and Confused (1993), and went on to appear in films such as the slasher Texas Chainsaw Massacre: The Next Generation (1994), the legal thriller A Time to Kill (1996), Steven Spielberg''s historical drama Amistad (1997), the science fiction drama Contact (1997), the comedy EDtv (1999) and the war film U-571 (2000).', '/template/images/artists/4.jpg'),
(5, 'Anne', 'Hathaway', '1982-11-12', 'USA', 'Anne Jacqueline Hathaway is an American actress and singer. Born in Brooklyn, New York and brought up in Millburn, New Jersey, Hathaway was inspired to act by her mother and as a high school student, was nominated for the Paper Mill Playhouse Rising Star Award for Best Performance by a High School Actress for her performance in Once Upon a Mattress. She made her professional screen debut in the short-lived Fox television series Get Real (1999-2000), before landing the lead role of Mia Thermopolis in the Disney comedy film The Princess Diaries (2001), for which she won the Teen Choice Award for Choice Movie Actress – Comedy. Hathaway went on to become a widely praised "role model for children" for her roles in Nicholas Nickleby (2002), Ella Enchanted (2004), The Princess Diaries 2: Royal Engagement (2004), and Hoodwinked! (2005).', '/template/images/artists/5.jpg'),
(6, 'Jessica', 'Chastain', '1977-03-24', 'USA', 'Jessica Chastain is an American actress and film producer. Chastain is known to prepare extensively for her roles, which are typically emotionally grueling ones across a range of genres. ', '/template/images/artists/6.jpg'),
(7, 'Humphrey', 'Bogart', '1899-12-25', 'USA', 'Humphrey DeForest Bogart was an American screen actor whose performances in iconic 1940s films noir such as The Maltese Falcon, Casablanca, and The Big Sleep earned him status as a cultural icon. ', '/template/images/artists/7.jpg'),
(8, 'Ingrid', 'Bergman', '1915-08-29', 'UK', 'Ingrid Bergman was a Swedish actress who starred in a variety of European and American films. She won three Academy Awards, two Emmy Awards, four Golden Globe Awards, a BAFTA Award, and the Tony Award for Best Actress.', '/template/images/artists/8.jpg'),
(9, 'Paul', 'Henreid', '1908-01-10', 'USA', 'After a successful New York theater run, Henreid was put under contract with RKO in 1941. The studio changed his name at from von Hernried to the simpler and less overtly Germanic Henreid. His first film for RKO was Joan of Paris which came out in 1942. Shortly after his arrival Henreid appeared in two key films in his career. In Now, Voyager he played the romantic lead opposite Bette Davis, and shared with her one of cinema''s most imitated scenes, in which he lights two cigarettes at once and hands one to her. Henreid''s next role was as Victor Laszlo, heroic anti-Nazi leader, in Casablanca with Humphrey Bogart and Ingrid Bergman. In 1946, Henreid became a citizen of the United States.', '/template/images/artists/9.jpg'),
(10, 'Adrien', 'Brody', '1973-04-14', 'USA', 'Adrien Brody is an American actor. He received widespread recognition and acclaim after starring in Roman Polanski''s The Pianist, for which he won the Academy Award for Best Actor at age 29, making him the youngest actor to win in that category.', '/template/images/artists/10.jpg'),
(11, 'Thomas', 'Kretschmann', '1962-09-08', 'Germany', 'Thomas Kretschmann is a German actor and magician best known for playing Lieutenant Hans von Witzland in the 1993 film Stalingrad, Hauptmann Peter Kahn in the 2013 film Stalingrad, Hauptmann Wilm Hosenfeld in The Pianist, Hermann Fegelein in Downfall, Major Otto Remer in the 2008 film Valkyrie, and Captain Engelhorn in the 2005 remake of King Kong, and for voicing Professor Z in Cars 2. He appeared as Baron Strucker in Marvel Studios'' Captain America: The Winter Soldier and Avengers: Age of Ultron.', '/template/images/artists/11.jpg'),
(12, 'Frank', 'Finlay', '1926-08-06', 'UK', 'Francis "Frank" Finlay was an English stage, film and television actor. He was Oscar-nominated for his supporting role in Olivier''s 1965 film of Othello and got his first leading role on television in 1971 as Casanova, which led to appearances on The Morecambe and Wise Show. He also appeared in the controversial drama Bouquet of Barbed Wire.', '/template/images/artists/12.jpg'),
(13, 'Leonardo', 'DiCaprio', '1974-11-11', 'USA', 'Leonardo Wilhelm DiCaprio is an American actor and film producer. In the early 1990s, DiCaprio began his career by appearing in television commercials, after which he had recurring roles in TV series such as the soap opera Santa Barbara and the sitcom, Growing Pains. In 1993, DiCaprio began his film career by starring as Josh in Critters 3, before starring in the film adaptation of the memoir This Boy''s Life (1993) alongside Robert De Niro. DiCaprio was praised for his supporting role in the drama What''s Eating Gilbert Grape (1993), and gained public recognition with leading roles in the drama The Basketball Diaries (1995), and the romantic drama Romeo + Juliet (1996), before achieving international fame with James Cameron''s epic romance Titanic (1997), which became the highest-grossing film to that point.', '/template/images/artists/13.jpg'),
(14, 'Matt', 'Damon', '1970-10-08', 'USA', 'Matthew Paige "Matt" Damon is an American actor and filmmaker. Born and raised in Cambridge, Massachusetts, Damon began his acting career by appearing in high school theater productions and he made his professional acting debut in the film Mystic Pizza (1988). He came to prominence in 1997 when he wrote and starred in Good Will Hunting alongside Ben Affleck, which won them the Academy Award for Best Original Screenplay and the Golden Globe Award for Best Screenplay and earned Damon a nomination for the Academy Award for Best Actor. He received further praise for his roles as the eponymous character in Saving Private Ryan (1998), the antihero in The Talented Mr. Ripley (1999), a fallen angel in Dogma, and received critical acclaim for performances in dramas such as Syriana (2005) and The Good Shepherd, as well as his role as a villain in the neo-noir crime drama The Departed (2006).', '/template/images/artists/14.jpg'),
(15, 'Jack', 'Nicholson', '1937-04-22', 'USA', 'John Joseph "Jack" Nicholson is an American actor and filmmaker, having performed for nearly 60 years. He is known for playing a wide range of starring or supporting roles, including satirical comedy, romance and dark portrayals of excitable and psychopathic characters. In many of his films he played the "eternal outsider, the sardonic drifter", and someone who rebels against the social structure.', '/template/images/artists/15.jpg'),
(16, 'Michael', 'J. Fox', '1961-06-09', 'Canada', 'Michael Andrew Fox, OC is a Canadian-American[1] actor, author, producer, and activist. With a film and television career spanning from the 1970s, Fox''s roles have included Marty McFly from the Back to the Future trilogy (1985–1990); Alex P. Keaton from NBC''s Family Ties (1982–1989), for which he won three Emmy Awards and a Golden Globe Award; and Mike Flaherty in ABC''s Spin City (1996–2001), for which he won an Emmy, three Golden Globes, and two Screen Actors Guild Awards.', '/template/images/artists/16.jpg'),
(17, 'Christopher', 'Lloyd', '1938-10-22', 'USA', 'Christopher Allen Lloyd is an American actor and voice actor, best known for his roles as Emmett "Doc" Brown in the Back to the Future trilogy, Jim Ignatowski in the television series Taxi, Uncle Fester in the film The Addams Family and its sequel Addams Family Values, and Judge Doom in Who Framed Roger Rabbit.', '/template/images/artists/17.jpg'),
(18, 'Lea', 'Thompson', '1961-05-31', 'USA', 'Lea Katherine Thompson is an American actress, television director, and television producer. She is best known for her role as Lorraine Baines in the Back to the Future trilogy and as the title character in the 1990s NBC sitcom Caroline in the City. Other films she is known for include All the Right Moves, The Beverly Hillbillies, Howard the Duck, Jaws 3-D, Red Dawn, and Some Kind of Wonderful. Since 2011 she has co-starred as Kathryn Kennish in the ABC Family series Switched at Birth.', '/template/images/artists/18.jpg'),
(19, 'Miles', 'Teller', '1987-02-20', 'USA', 'Miles Alexander Teller is an American actor. Born in Pennsylvania and an alumnus of the Tisch School of Arts, he appeared in several short films and television movies before making his feature film debut in Rabbit Hole (2010). He had supporting roles in Footloose (2011) and Project X (2012), before garnering critical acclaim for his leading performance as Sutter Keely in The Spectacular Now (2013), for which he was awarded the Sundance Film Festival Special Jury Prize for Dramatic Acting.', '/template/images/artists/19.jpg'),
(20, 'J.K.', 'Simmons', '1955-01-09', 'USA', 'Jonathan Kimble "J. K." Simmons is an American actor and voice actor. He is known for the television roles of Dr. Emil Skoda on the NBC series Law & Order (and other Law & Order franchise series), neo-Nazi Vernon Schillinger on the HBO prison-drama Oz, and Assistant Police Chief Will Pope on TNT''s The Closer; the film roles of J. Jonah Jameson in the Sam Raimi Spider-Man trilogy, and music instructor Terence Fletcher in 2014''s Whiplash. He is also known for the voicing Cave Johnson in the 2011 puzzle game Portal 2, Lenny Turtletaub in BoJack Horseman, The Warden in Megamind, Kai in Kung Fu Panda 3, Stanford Pines in Gravity Falls, Tenzin in The Legend of Korra and Mayor Lionheart in Zootopia. Simmons also reprised his role as J. Jonah Jameson in various Marvel animated series and video games. He has also appeared in a series of television commercials for Farmers Insurance.', '/template/images/artists/20.jpg'),
(21, 'Melissa', 'Benoist', '1988-10-04', 'USA', 'Melissa Marie Benoist is an American actress and singer best known for her portrayal of the title character, Kara Zor-El, in the CBS superhero drama series Supergirl.', '/template/images/artists/21.jpg'),
(22, 'Russell', 'Crowe', '1964-04-07', 'New Zealand', 'Russell Ira Crowe is an actor, film producer and musician. Although a New Zealand citizen, he has lived most of his life in Australia and identifies himself as an Australian.[1] He came to international attention for his role as the Roman General Maximus Decimus Meridius in the 2000 historical epic film Gladiator, directed by Ridley Scott, for which Crowe won an Academy Award for Best Actor, a Broadcast Film Critics Association Award for Best Actor, an Empire Award for Best Actor and a London Film Critics Circle Award for Best Actor and 10 further nominations for best actor.', '/template/images/artists/22.jpg'),
(23, 'Joaquin', 'Phoenix', '1974-10-28', 'USA', 'Joaquín Rafael Phoenix, known formerly as Leaf Phoenix, is an American actor, producer, music video director, musician and activist. For his work as an artist, Phoenix has received a Grammy Award, a Golden Globe Award and three Academy Award nominations.', '/template/images/artists/23.jpg'),
(24, 'Connie', 'Nielsen', '1965-07-03', 'Denmark', 'Connie Inge-Lise Nielsen is a Danish actress whose first major role in an English language film was a supporting role in The Devil''s Advocate (1997); Nielsen later gained international attention for her role in Ridley Scott''s Gladiator (2000). Her films include Mission to Mars (2000), One Hour Photo (2002), Basic (2003), The Hunted (2003), The Ice Harvest (2005) and Nymphomaniac (2014). She starred as Meredith Kane on the Starz TV series Boss (2011–2012) and was a lead character in the second season of The Following.', '/template/images/artists/24.jpg'),
(25, 'Guy', 'Pearce', '1967-10-05', 'Australia', 'Guy Edward Pearce is an Australian actor and musician.[2] He is well known for having starred in the role of Mike Young in the Australian television series Neighbours and in films such as The Adventures of Priscilla, Queen of the Desert (1994), L.A. Confidential (1997), Memento (2000), The Count of Monte Cristo (2002), The Road (2009), The King''s Speech (2010), Prometheus (2012), and Iron Man 3 (2013). In Australian cinema, he has appeared in The Proposition (2005), Animal Kingdom (2010), The Rover (2014), and Holding the Man (2015). He has won an Emmy Award and received nominations for Golden Globe Awards, Screen Actors Guild Awards, and AACTA Awards.', '/template/images/artists/25.jpg'),
(26, 'Carrie-Anne', 'Moss', '1967-08-21', 'Canada', 'Carrie-Anne Moss is a Canadian actress, best known for her role of Trinity in The Matrix trilogy of films beginning with the sci-fi action film The Matrix (1999), her breakthrough film. She has starred in the neo-noir-psychological thriller film Memento, directed by Christopher Nolan, the sci-fi thriller Red Planet, and the romantic drama Chocolat (all 2000), the indie drama Snow Cake (2006), the Hitchcockian mystery horror-thriller film Disturbia (2007) and the controversial suspense thriller Unthinkable (2010). Moss stars as Jeri Hogarth in the Netflix series Jessica Jones and reprised the role in Daredevil.', '/template/images/artists/26.jpg'),
(27, 'Joe', 'Pantoliano', '1951-09-12', 'USA', 'Joseph Peter "Joe" Pantoliano often referred to by his nickname "Joey Pants", is an American actor.\r\nPantoliano is best known for portraying Ralph Cifaretto on The Sopranos, Bob Keane in La Bamba, Cypher in The Matrix, Teddy in Memento, Francis Fratelli in The Goonies, Guido in Risky Business, Eddie Moscone in Midnight Run, and Caesar in Bound. He also played Deputy U.S. Marshal Cosmo Renfro in both The Fugitive and U.S. Marshals.', '/template/images/artists/27.jpg'),
(28, 'Martin', 'Sheen', '1940-08-03', 'USA', 'Ramón Antonio Gerardo Estévez better known by his stage name, Martin Sheen, is an American actor who first became known for his roles in the films, The Subject Was Roses (1968) and Badlands (1973), and later achieved wide recognition for his leading role in Apocalypse Now (1979).', '/template/images/artists/28.jpg'),
(29, 'Marlon', 'Brando', '1924-04-03', 'USA', 'Marlon Brando, Jr. was an American cinema and theatre actor. He drew acclaim in the 1950''s for bringing a new realism to cinematic acting, and is often cited in professional acting circles as one of the most influential actors of the post-war period. He is also credited with popularizing the Stanislavski system of acting, or method acting. A mid-20th Century Western cultural icon, Brando''s career-defining performance was in On the Waterfront (1954), and his early reputation as an epitome of the modern classical actor was augmented by influential performances in A Streetcar Named Desire (1951), Julius Caesar (1953), and The Wild One (1953).', '/template/images/artists/29.jpg'),
(30, 'Robert', 'Duvall', '1931-01-05', 'USA', 'Robert Selden Duvall is an American actor and director. He has been nominated for seven Academy Awards (winning for his performance in Tender Mercies), seven Golden Globes (winning four), and has multiple nominations and one win each of the BAFTA, Screen Actors Guild Award, and Emmy Award. He received the National Medal of Arts in 2005. He has starred in some of the most acclaimed and popular films and television series of all time, including To Kill a Mockingbird (1962), The Twilight Zone (1963), The Outer Limits (1964), Bullitt (1968), True Grit (1969), MASH (1970), THX 1138 (1971), Joe Kidd (1972), The Godfather (1972), The Godfather Part II (1974), The Conversation (1974), Network (1976), Apocalypse Now (1979), The Handmaid''s Tale (1990), Rambling Rose (1991), and Falling Down (1993).', '/template/images/artists/30.jpg'),
(31, 'Christian', 'Bale', '1974-01-30', 'UK', 'Christian Charles Philip Bale is an English actor.[1][2] He has starred in both blockbuster films and smaller projects from independent producers and art houses.', '/template/images/artists/31.jpg'),
(32, 'Hugh', 'Jackman', '1968-10-12', 'Australia', 'Hugh Michael Jackman is an Australian actor, producer and musician. Jackman has won international recognition for his roles in major films, notably as superhero, period, and romance characters. He is best known for his long-running role as Wolverine in the X-Men film series, as well as for his lead roles in the romantic-comedy fantasy Kate & Leopold (2001), the action-horror film Van Helsing (2004), the magic-themed drama The Prestige (2006), the epic historical romantic drama Australia (2008), the sci-fi sports drama Real Steel (2011), the film version of Les Misérables (2012), and the thriller Prisoners (2013). His work in Les Misérables earned him his first Academy Award nomination for Best Actor and his first Golden Globe Award for Best Actor – Motion Picture Musical or Comedy in 2013.', '/template/images/artists/32.jpg'),
(33, 'Scarlett', 'Johansson', '1984-11-22', 'USA', 'Scarlett Johansson is an American actress, model, and singer. She made her film debut in North (1994). Johansson subsequently starred in Manny & Lo in 1996, and garnered further acclaim and prominence with roles in The Horse Whisperer (1998) and Ghost World (2001). She shifted to adult roles with her performances in Girl with a Pearl Earring (2003) and Sofia Coppola''s Lost in Translation (2003), for which she won a BAFTA award for Best Actress in a Leading Role.', '/template/images/artists/33.JPG'),
(34, 'Jamie', 'Foxx', '1967-12-13', 'USA', 'Eric Marlon Bishop known professionally by his stage name Jamie Foxx, is an American actor, singer, songwriter and comedian. He won an Academy Award for Best Actor, BAFTA Award for Best Actor in a Leading Role, and Golden Globe Award for Best Actor in a Musical or Comedy, for his work in the 2004 biographical film Ray. The same year, he was nominated for the Academy Award for Best Supporting Actor for his role in the action film Collateral.', '/template/images/artists/34.jpg'),
(35, 'Christoph', 'Waltz', '1956-10-04', 'Austria', 'Christoph Waltz is an Austrian-German actor. He is best known for his works with American filmmaker Quentin Tarantino, receiving acclaim for portraying SS-Standartenführer Hans Landa in Inglourious Basterds (2009) and bounty hunter Dr. King Schultz in Django Unchained (2012). For each performance, he won an Academy Award, a BAFTA Award, and a Golden Globe Award for Best Supporting Actor. Additionally, he received the Best Actor Award at the Cannes Film Festival and a Screen Actors Guild Award for his portrayal of Landa.', '/template/images/artists/35.jpg'),
(36, 'Kerry', 'Washington', '1977-01-31', 'USA', 'Kerry Marisa Washington is an American actress. Since 2012, Washington has gained wide public recognition for starring in the ABC drama Scandal, a Shonda Rhimes series in which she plays Olivia Pope, a crisis management expert to politicians and power brokers in Washington DC. For her role, she has been nominated twice for a Primetime Emmy Award for Outstanding Lead Actress in a Drama Series, Screen Actors Guild Award for Outstanding Performance by a Female Actor in a Drama Series, and a Golden Globe Award for Best Actress in a Television Series.', '/template/images/artists/36.jpg'),
(37, 'Shelley', 'Duvall', '1949-07-07', 'USA', 'Shelley Alexis Duvall is an American actress, producer, writer, singer, and voice artist. She began her career in various Robert Altman films in the 1970s, including Brewster McCloud (1970), McCabe & Mrs. Miller (1971), Thieves Like Us (1974), Nashville (1975), and 3 Women (1977), which won her the Cannes Film Festival Award for Best Actress and a BAFTA nomination for Best Actress. Duvall had a supporting role in Annie Hall (1977) before starring in lead roles in Popeye (1980) and The Shining (1980).', '/template/images/artists/37.jpg'),
(38, 'Danny', 'Lloyd', '1973-01-01', 'USA', 'Danny Lloyd is an American teacher and former child actor most probably known for his role as Danny Torrance in the 1980 film The Shining, and adaptation of Stephen King''s 1977 novel of the same name.', '/template/images/artists/38.jpg'),
(39, 'Sebastian', 'Stan', '1982-08-13', 'USA', 'Sebastian Stan is a Romanian American actor, known for his role as James Buchanan "Bucky" Barnes/Winter Soldier in the Marvel Cinematic Universe. He also appeared in the 2010 film Black Swan. On television, Stan portrayed Carter Baizen on Gossip Girl, Prince Jack Benjamin on Kings, Jefferson on Once Upon a Time, and T.J. Hammond on the miniseries Political Animals. His role on Political Animals earned him a nomination for the Critics'' Choice Television Award for Best Supporting Actor in a Movie/Miniseries. In 2015, he co-starred in Jonathan Demme''s Ricki and the Flash, Ridley Scott''s The Martian, and Bryan Buckley''s The Bronze.', '/template/images/artists/39.jpg'),
(40, 'Kevin', 'Spacey', '1959-07-26', 'USA', 'Kevin Spacey Fowler is an American actor, film director, producer, singer and comedian. He began his career as a stage actor during the 1980s before obtaining supporting roles in film and television. He gained critical acclaim in the early 1990s that culminated in his first Academy Award for Best Supporting Actor for the neo-noir crime thriller The Usual Suspects (1995), and an Academy Award for Best Actor for midlife crisis-themed drama American Beauty (1999).', '/template/images/artists/40.jpg'),
(41, 'Annette', 'Bening', '1958-05-29', 'USA', 'Annette Carol Bening is an American actress. She began her career on the stage and was nominated for the 1987 Tony Award for Best Featured Actress in a Play for her performance in Coastal Disturbances. A four-time Academy Award-nominee for her roles in the films The Grifters (1990), American Beauty (1999), Being Julia (2004) and The Kids Are All Right (2010), she won a BAFTA Award for American Beauty and Golden Globe Awards for Being Julia and The Kids Are All Right. Her other film roles include Valmont (1989), Bugsy (1991), The American President (1995), The Siege (1998), Open Range (2003) and Running with Scissors (2006).', '/template/images/artists/41.jpg'),
(42, 'Thora', 'Birch', '1982-03-11', 'USA', 'Thora Birch is an American actress. She had early roles in the short-lived sitcom Day by Day and in Purple People Eater (1988), in which she won a Young Artist Award for "Best Young Actress Under Nine Years of Age". She also starred in other films, such as All I Want for Christmas (1991), Patriot Games (1992), Hocus Pocus (1993), Monkey Trouble (1994), Now and Then (1995) and Alaska (1996).', '/template/images/artists/42.jpg'),
(43, 'Sigourney', 'Weaver', '1949-10-08', 'USA', 'Sigourney Weaver is an American actress and film producer. Following her film debut as a minor character in Annie Hall (1977), she quickly came to prominence in 1979 with her first lead role as Ellen Ripley in Alien. She reprised the role in three sequels: Aliens (1986), for which she was nominated for the Academy Award Best Actress; Alien 3 (1992), and Alien: Resurrection (1997). She is also known for her starring roles in the box-office hits Ghostbusters (1984), Ghostbusters II (1989), and Avatar (2009).', '/template/images/artists/43.jpg'),
(44, 'Michael', 'Biehn', '1956-07-31', 'USA', 'Michael Connell Biehn is an American actor. He is known for his roles in science fiction films directed by James Cameron; as Sgt. Kyle Reese in The Terminator (1984), Cpl. Dwayne Hicks in Aliens (1986) and Lt. Coffey in The Abyss (1989). He was nominated for the Saturn Award for Best Actor for Aliens. His other films include The Fan (1981), K2 (1991), Tombstone (1993), The Rock (1996), Megiddo: The Omega Code 2 (2001) and Planet Terror (2007). On television, he has appeared in Hill Street Blues (1984) and Adventure Inc. (2002-03).', '/template/images/artists/44.jpg'),
(45, 'Carrie', 'Henn', '1976-05-07', 'USA', 'Carrie Henn was born on May 7, 1976 in Panama City, Florida, USA as Caroline Marie Henn. She is an actress, known for Aliens (1986), Alien Encounters: Superior Fan Power Since 1979 (2014) and Superior Firepower: The Making of ''Aliens'' (2003). She has been married to Nathan Kutcher since July 2, 2005. They have one child. ', '/template/images/artists/45.jpg'),
(46, 'Yôji', 'Matsuda', '1967-10-19', 'Japan', 'Yōji Matsuda (松田 洋治 Matsuda Yōji, born October 19, 1967) is a Japanese actor and voice actor from Tokyo.', '/template/images/artists/46.jpg'),
(47, 'Yuriko', 'Ishida', '1969-10-03', 'Japan', 'Yuriko Ishida is an actress, known for From Up on Poppy Hill (2011), Pom Poko (1994) and Boiling Point (1990).', '/template/images/artists/47.jpg'),
(48, 'Yûko', 'Tanaka', '1955-04-29', 'Japan', 'Yûko Tanaka is known for her work on Maameren tarinoita (2006), Princess Mononoke (1997) and Dearest (2012). She has been married to Kenji Sawada since 1989.', '/template/images/artists/48.jpg'),
(49, 'Orson', 'Welles', '1915-05-06', 'USA', 'George Orson Welles was an American actor, director, writer, and producer who worked in theatre, radio, and film. He is remembered for his innovative work in all three: in theatre, most notably Caesar (1937), a Broadway adaptation of William Shakespeare''s Julius Caesar; in radio, the 1938 broadcast "The War of the Worlds", one of the most famous in the history of radio; and in film, Citizen Kane (1941), consistently ranked as one of the all-time greatest films.', '/template/images/artists/49.jpg'),
(50, 'Joseph', 'Cotten', '1905-05-15', 'USA', 'Joseph Cheshire Cotten, Jr. was an American film, stage, radio and television actor. Cotten achieved prominence on Broadway, starring in the original stage productions of The Philadelphia Story and Sabrina Fair. He first gained worldwide fame in the Orson Welles film Citizen Kane (1941), The Magnificent Ambersons (1942), and Journey into Fear (1943), for which Cotten was also credited with the screenplay. He went on to become one of the leading Hollywood actors of the 1940s, appearing in films such as Shadow of a Doubt (1943), Love Letters (1945), Duel in the Sun (1946), Portrait of Jennie (1948) and The Third Man (1949). One of his final films was Michael Cimino''s Heaven''s Gate (1980).', '/template/images/artists/50.JPG'),
(51, 'Dorothy', 'Comingore', '1913-08-24', 'USA', 'Dorothy Comingore was an American film actress, best known for her portrayal of Susan Alexander in Orson Welles''s critically acclaimed movie Citizen Kane (1941).', '/template/images/artists/51.jpg'),
(52, 'Chris', 'Evans', '1981-06-13', 'USA', 'Christopher Robert Evans is an American actor. Evans is best known for his superhero roles as the Marvel Comics characters Captain America in the Marvel Cinematic Universe and the Human Torch in Fantastic Four. He began his career on the 2000 television series Opposite Sex, moving to film in 2001 with the teen comedy Not Another Teen Movie. In 2013, he starred as the lead in the critically acclaimed science fiction action film Snowpiercer, and in 2015, he made his directorial debut with the drama Before We Go, in which he also starred.', '/template/images/artists/52.jpg'),
(53, 'Robert', 'Downey Jr.', '1965-04-04', 'USA', 'Robert John Downey Jr. is an American actor. His career has included critical and popular success in his youth, followed by a period of substance abuse and legal troubles, and a resurgence of commercial success in middle age.', '/template/images/artists/53.jpg'),
(54, 'Anthony', 'Mackie', '1978-09-23', 'USA', 'Anthony Dwane Mackie is an American actor. He has been featured in feature films, television series, and Broadway and Off-Broadway plays, including Ma Rainey''s Black Bottom, Drowning Crow, McReele, A Soldier''s Play, and Carl Hancock Rux''s Talk, for which he won an Obie Award in 2002.', '/template/images/artists/54.jpg'),
(55, 'Ellen', 'Burstyn', '1932-11-07', 'USA', 'Ellen Burstyn is an American actress. Her career began in theatre during the late 1950s, and over the next decade included several films and television series.', '/template/images/artists/55.jpg'),
(56, 'Jared', 'Leto', '1971-12-26', 'USA', 'Jared Joseph Leto is an American actor, singer-songwriter, and director. After starting his career with television appearances in the early 1990s, Leto achieved recognition for his role as Jordan Catalano on the television series My So-Called Life (1994). He made his film debut in How to Make an American Quilt (1995) and received critical praise for his performance in Prefontaine (1997). Leto played supporting roles in The Thin Red Line (1998), Fight Club (1999) and American Psycho (2000), as well as the lead role in Urban Legend (1998), and earned critical acclaim after portraying heroin addict Harry Goldfarb in Requiem for a Dream (2000). He later began focusing increasingly on his music career, returning to acting with Panic Room (2002), Alexander (2004), Lord of War (2005), Lonely Hearts (2006), Chapter 27 (2007), and Mr. Nobody (2009). He made his directorial debut in 2012 with the documentary film Artifact.', '/template/images/artists/56.jpg'),
(57, 'Jennifer', 'Connelly', '1970-12-12', 'USA', 'Jennifer Lynn Connelly is an American film actress who began her career as a child model. She appeared in magazine, newspaper and television advertising, before she made her debut role in the 1984 crime film Once Upon a Time in America. Connelly continued modeling and acting, starring in films such as the 1986 film Labyrinth and the 1991 films Career Opportunities and The Rocketeer. She gained critical acclaim for her work in the 1998 science fiction film Dark City and for her portrayal of Marion Silver in the 2000 drama Requiem for a Dream.', '/template/images/artists/57.jpg'),
(58, 'Min-sik', 'Choi', '1962-01-22', 'South Korea', 'Choi Min-shik first made a name for himself in theater before breaking into the film world with a role in Park Chong-won''s acclaimed film ''Our Twisted Hero'' (1992). In the mid-nineties he continued to act in theater productions as well as in several TV dramas, including Moon Over Seoul with Han Seok-gyu. ', '/template/images/artists/58.jpg'),
(59, 'Ji-tae', 'Yu', '1976-04-13', 'South Korea', 'Ji-tae Yu was born on April 13, 1976 in Seoul, South Korea. He is an actor and director, known for Old Boy (2003), Natural City (2003) and Into the Mirror (2003). ', '/template/images/artists/59.jpg'),
(60, 'Hye-jeong', 'Kang', '1982-01-04', 'South Korea', 'Hye-jeong Kang was born on January 4, 1982 in South Korea. She is an actress, known for Old Boy (2003), Battle Ground 625 (2005) and Invisible Waves (2006). She has been married to Tablo (Lee Seon-Woong) since October 26, 2009. ', '/template/images/artists/60.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `catId` int(10) UNSIGNED NOT NULL,
  `name` char(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`catId`, `name`) VALUES
(1, 'Crime'),
(2, 'Drama'),
(3, 'Adventure'),
(4, 'Sci-Fic'),
(5, 'Mystery');

-- --------------------------------------------------------

--
-- Структура таблицы `movie`
--

CREATE TABLE `movie` (
  `movieCode` int(10) UNSIGNED NOT NULL,
  `title` char(30) NOT NULL,
  `image` varchar(75) DEFAULT NULL,
  `catID` int(10) UNSIGNED DEFAULT NULL,
  `movieDesc` text,
  `year` int(10) UNSIGNED DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `popular` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `movie`
--

INSERT INTO `movie` (`movieCode`, `title`, `image`, `catID`, `movieDesc`, `year`, `link`, `popular`) VALUES
(1, 'American History X', '/template/images/movies/1.jpg', 1, 'Derek Vineyard is paroled after serving 3 years in prison for killing two thugs who tried to break into/steal his truck. Through his brother, Danny Vineyard''s narration, we learn that before going to prison, Derek was a skinhead and the leader of a violent white supremacist gang that committed acts of racial crime throughout L.A. and his actions greatly influenced Danny. Reformed and fresh out of prison, Derek severs contact with the gang and becomes determined to keep Danny from going down the same violent path as he did.', 1998, 'UKYaBgu4keQ', NULL),
(2, 'Interstellar', '/template/images/movies/2.jpg', 3, 'In the near future, Earth has been devastated by drought and famine, causing a scarcity in food and extreme changes in climate. When humanity is facing extinction, a mysterious rip in the space-time continuum is discovered, giving mankind the opportunity to widen its lifespan. A group of explorers must travel beyond our solar system in search of a planet that can sustain life. The crew of the Endurance are required to think bigger and go further than any human in history as they embark on an interstellar voyage into the unknown. Coop, the pilot of the Endurance, must decide between seeing his children again and the future of the human race. ', 2014, 'ePbKGoIGAXY', 1),
(3, 'Casablanca', '/template/images/movies/3.jpg', 2, 'In World War II Casablanca, Rick Blaine, exiled American and former freedom fighter, runs the most popular nightspot in town. The cynical lone wolf Blaine comes into the possession of two valuable letters of transit. When Nazi Major Strasser arrives in Casablanca, the sycophantic police Captain Renault does what he can to please him, including detaining a Czechoslovak underground leader Victor Laszlo. Much to Rick''s surprise, Lazslo arrives with Ilsa, Rick''s one time love. Rick is very bitter towards Ilsa, who ran out on him in Paris, but when he learns she had good reason to, they plan to run off together again using the letters of transit. Well, that was their original plan....', 1942, 'rEWaqUVac3M', 1),
(4, 'The Pianist', '/template/images/movies/4.jpg', 2, 'A brilliant pianist, a Polish Jew, witnesses the restrictions Nazis place on Jews in the Polish capital, from restricted access to the building of the Warsaw ghetto. As his family is rounded up to be shipped off to the Nazi labor camps, he escapes deportation and eludes capture by living in the ruins of Warsaw. ', 2002, 'e_4NvY3v51Q', NULL),
(5, 'The Departed', '/template/images/movies/5.jpg', 1, 'In South Boston, the state police force is waging war on Irish-American organized crime. Young undercover cop Billy Costigan (Leonardo DiCaprio) is assigned to infiltrate the mob syndicate run by gangland chief Frank Costello (Jack Nicholson). While Billy quickly gains Costello''s confidence, Colin Sullivan (Matt Damon), a hardened young criminal who has infiltrated the state police as an informer for the syndicate is rising to a position of power in the Special Investigation Unit. Each man becomes deeply consumed by their double lives, gathering information about the plans and counter-plans of the operations they have penetrated. But when it becomes clear to both the mob and the police that there is a mole in their midst, Billy and Colin are suddenly in danger of being caught and exposed to the enemy - and each must race to uncover the identity of the other man in time to save themselves. But is either willing to turn on their friends and comrades they''ve made during their long stints...', 2006, 'iQpb1LoeVUc', NULL),
(6, 'Back to the Future', '/template/images/movies/6.jpg', 4, 'Marty McFly, a typical American teenager of the Eighties, is accidentally sent back to 1955 in a plutonium-powered DeLorean "time machine" invented by a slightly mad scientist. During his often hysterical, always amazing trip back in time, Marty must make certain his teenage parents-to-be meet and fall in love - so he can get back to the future.', 1985, 'qvsgGtivCgs', NULL),
(7, 'Whiplash', '/template/images/movies/7.jpg', 2, 'A young and talented drummer attending a prestigious music academy finds himself under the wing of the most respected professor at the school, one who does not hold back on abuse towards his students. The two form an odd relationship as the student wants to achieve greatness, and the professor pushes him.', 2014, 'aHDEZXoh4-c', 1),
(8, 'Gladiator', '/template/images/movies/8.jpg', 3, 'Maximus is a powerful Roman general, loved by the people and the aging Emperor, Marcus Aurelius. Before his death, the Emperor chooses Maximus to be his heir over his own son, Commodus, and a power struggle leaves Maximus and his family condemned to death. The powerful general is unable to save his family, and his loss of will allows him to get captured and put into the Gladiator games until he dies. The only desire that fuels him now is the chance to rise to the top so that he will be able to look into the eyes of the man who will feel his revenge. ', 2000, 'uwTKRz-WmHU', 1),
(9, 'Memento', '/template/images/movies/9.jpg', 2, 'Memento chronicles two separate stories of Leonard, an ex-insurance investigator who can no longer build new memories, as he attempts to find the murderer of his wife, which is the last thing he remembers. One story line moves forward in time while the other tells the story backwards revealing more each time. ', 2000, 'E77LfnMI-34', NULL),
(10, 'Apocalypse Now', '/template/images/movies/10.jpg', 2, 'It is the height of the war in Vietnam, and U.S. Army Captain Willard is sent by Colonel Lucas and a General to carry out a mission that, officially, ''does not exist - nor will it ever exist''. The mission: To seek out a mysterious Green Beret Colonel, Walter Kurtz, whose army has crossed the border into Cambodia and is conducting hit-and-run missions against the Viet Cong and NVA. The army believes Kurtz has gone completely insane and Willard''s job is to eliminate him! Willard, sent up the Nung River on a U.S. Navy patrol boat, discovers that his target is one of the most decorated officers in the U.S. Army. His crew meets up with surfer-type Lt-Colonel Kilgore, head of a U.S Army helicopter cavalry group which eliminates a Viet Cong outpost to provide an entry point into the Nung River. After some hair-raising encounters, in which some of his crew are killed, Willard, Lance and Chef reach Colonel Kurtz''s outpost, beyond the Do Lung Bridge. Now, after becoming prisoners of Kurtz, will... ', 1979, 'twnJGBPOWw8', NULL),
(11, 'The Prestige', '/template/images/movies/11.jpg', 4, 'In the end of the Nineteenth Century, in London, Robert Angier, his beloved wife Julia McCullough and Alfred Borden are friends and assistants of a magician. When Julia accidentally dies during a performance, Robert blames Alfred for her death and they become enemies. Both become famous and rival magicians, sabotaging the performance of the other on the stage. When Alfred performs a successful trick, Robert becomes obsessed trying to disclose the secret of his competitor with tragic consequences. ', 2006, 'ijXruSzfGEc', 1),
(12, 'Django Unchained', '/template/images/movies/12.jpg', 2, 'Former dentist, Dr. King Schultz, buys the freedom of a slave, Django, and trains him with the intent to make him his deputy bounty hunter. Instead, he is led to the site of Django''s wife who is under the hands of Calvin Candie, a ruthless plantation owner. ', 2012, 'mUtUKeJSWbI', NULL),
(13, 'The Shining', '/template/images/movies/13.JPG', 2, 'Signing a contract, Jack Torrance, a normal writer and former teacher agrees to take care of a hotel which has a long, violent past that puts everyone in the hotel in a nervous situation. While Jack slowly gets more violent and angry of his life, his son, Danny, tries to use a special talent, the "Shining", to inform the people outside about whatever that is going on in the hotel.', 1980, 'S014oGZiSdI', NULL),
(14, 'American Beauty', '/template/images/movies/14.jpg', 2, 'Lester and Carolyn Burnham are, on the outside, a perfect husband and wife in a perfect house in a perfect neighborhood. But inside, Lester is slipping deeper and deeper into a hopeless depression. He finally snaps when he becomes infatuated with one of his daughter''s friends. Meanwhile, his daughter Jane is developing a happy friendship with a shy boy-next-door named Ricky, who lives with an abusive father.', 1999, '96V-rAtTMGo', 1),
(15, 'Aliens', '/template/images/movies/15.jpg', 4, 'Fifty seven years after Ellen Ripley survived her disastrous ordeal, her escape vessel is recovered after drifting across the galaxy as she slept in cryogenic stasis. Back on earth, nobody believed her story about the "Aliens" on the planet LV-426. After the "Company" orders the colony on LV-426 to investigate, however, all communication with the colony is lost. The Company enlists Ripley to aid a team of tough, rugged space marines on a rescue mission to the now partially terraformed planet to find out if there are aliens or survivors. As the mission unfolds, Ripley will be forced to come to grips with her worst nightmare, but even as she does, she finds that the worst is yet to come.', 1986, 'XKSQmYUaIyE', NULL),
(16, 'Princess Mononoke', '/template/images/movies/16.jpg', 3, 'While protecting his village from rampaging boar-god/demon, a confident young warrior, Ashitaka, is stricken by a deadly curse. To save his life, he must journey to the forests of the west. Once there, he''s embroiled in a fierce campaign that humans were waging on the forest. The ambitious Lady Eboshi and her loyal clan use their guns against the gods of the forest and a brave young woman, Princess Mononoke, who was raised by a wolf-god. Ashitaka sees the good in both sides and tries to stem the flood of blood. This is met be animosity by both sides as they each see him as supporting the enemy. ', 1997, 'SeYUuF8uC2M', NULL),
(17, 'Citizen Kane', '/template/images/movies/17.jpg', 5, 'A group of reporters are trying to decipher the last word ever spoken by Charles Foster Kane, the millionaire newspaper tycoon: "Rosebud." The film begins with a news reel detailing Kane''s life for the masses, and then from there, we are shown flashbacks from Kane''s life. As the reporters investigate further, the viewers see a display of a fascinating man''s rise to fame, and how he eventually fell off the top of the world. ', 1941, '1TmXN4aIGzc', NULL),
(18, 'Captain America: Civil War', '/template/images/movies/18.jpg', 4, 'With many people fearing the actions of super heroes, the government decides to push for the Anti-Hero Registration Act, a law that limits a heroes actions. This results in a division in The Avengers. Iron Man stands with this Act, claiming that their actions must be kept in check otherwise cities will continue to be destroyed, but Captain America feels that saving the world is daring enough and that they cannot rely on the government to protect the world. This escalates into an all-out war between Team Iron Man (Iron Man, Black Panther, Vision, Black Widow, War Machine, and Spiderman) and Team Captain America (Captain America, Bucky Barnes, Falcon, Sharon Carter, Scarlett Witch, Hawkeye, and Ant Man) while a new villain emerges', 2016, 'U2P4DkHxXNQ', NULL),
(19, 'Requiem for a Dream', '/template/images/movies/19.jpg', 2, 'Drugs. They consume mind, body and soul. Once you''re hooked, you''re hooked. Four lives. Four addicts. Four failures. Despite their aspirations of greatness, they succumb to their addictions. Watching the addicts spiral out of control, we bear witness to the dirtiest, ugliest portions of the underworld addicts reside in. It is shocking and eye-opening but demands to be seen by both addicts and non-addicts alike.', 2000, 'jzk-lmU4KZ4', NULL),
(20, 'Old Boy', '/template/images/movies/20.jpg', 5, 'An average man is kidnapped and imprisoned in a shabby cell for 15 years without explanation. He then is released, equipped with money, a cellphone and expensive clothes. As he strives to explain his imprisonment and get his revenge, Oh Dae-Su soon finds out that his kidnapper has a greater plan for him and is set onto a path of pain and suffering in an attempt to uncover the motive of his mysterious tormentor. ', 2013, 'WKz_AUF0GcU', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `role`
--

CREATE TABLE `role` (
  `movieCode` int(10) UNSIGNED NOT NULL,
  `artistId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `role`
--

INSERT INTO `role` (`movieCode`, `artistId`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 4),
(2, 5),
(2, 6),
(3, 7),
(3, 8),
(3, 9),
(4, 10),
(4, 11),
(4, 12),
(5, 13),
(5, 14),
(5, 15),
(6, 16),
(6, 17),
(6, 18),
(7, 19),
(7, 20),
(7, 21),
(8, 22),
(8, 23),
(8, 24),
(9, 25),
(9, 26),
(9, 27),
(10, 28),
(10, 29),
(10, 30),
(11, 31),
(11, 32),
(11, 33),
(12, 34),
(12, 35),
(12, 36),
(13, 15),
(13, 37),
(13, 38),
(14, 40),
(14, 41),
(14, 42),
(15, 43),
(15, 44),
(15, 45),
(16, 46),
(16, 47),
(16, 48),
(17, 49),
(17, 50),
(17, 51),
(18, 33),
(18, 39),
(18, 52),
(18, 53),
(18, 54),
(19, 55),
(19, 56),
(19, 57),
(20, 58),
(20, 59),
(20, 60);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `userId` int(10) UNSIGNED NOT NULL,
  `firstName` char(30) NOT NULL,
  `lastName` char(30) NOT NULL,
  `username` char(30) NOT NULL,
  `password` char(100) DEFAULT NULL,
  `usertype` int(1) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`userId`, `firstName`, `lastName`, `username`, `password`, `usertype`) VALUES
(1006, 'Bill', 'Smith', 'Admin', 'adminadmin', 1),
(1007, 'John', 'Darvin', 'Manager', 'manager', 2),
(1008, 'Linda', 'Storeman', 'User', 'useruser', 3),
(1013, 'ZAP', 'ZAP', 'ZAP', 'c:/Windows/system.ini', 3);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artistId`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`catId`);

--
-- Индексы таблицы `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movieCode`),
  ADD UNIQUE KEY `title` (`title`),
  ADD UNIQUE KEY `movieCode` (`movieCode`),
  ADD KEY `catID` (`catID`);

--
-- Индексы таблицы `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`movieCode`,`artistId`),
  ADD KEY `artistId` (`artistId`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `artist`
--
ALTER TABLE `artist`
  MODIFY `artistId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `catId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `movie`
--
ALTER TABLE `movie`
  MODIFY `movieCode` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1014;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_ibfk_1` FOREIGN KEY (`catID`) REFERENCES `categories` (`catId`);

--
-- Ограничения внешнего ключа таблицы `role`
--
ALTER TABLE `role`
  ADD CONSTRAINT `role_ibfk_1` FOREIGN KEY (`movieCode`) REFERENCES `movie` (`movieCode`),
  ADD CONSTRAINT `role_ibfk_2` FOREIGN KEY (`artistId`) REFERENCES `artist` (`artistId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
