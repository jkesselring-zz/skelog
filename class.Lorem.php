<?php
/*
* Lorem text retrieved from(And thank you to):
* Baconipsum.com, Gutenberg.org(ebook: (The Eleven Comedies, Volume 1 by Aristophanes) #8668),
* Fillerati.com, slipsum.com(lite version), lipsum.com, hipsteripsum.me, cupcakeipsum.com,
*  
*/
	class Lorem{
		private $lorem = array();
		private $type = array();
		private $ext = array();
		private $fn = array();

		function __construct() {
			$this->lorem[] = "Bacon ipsum dolor sit amet rump in meatloaf sirloin tenderloin drumstick ut spare ribs nisi flank Et tenderloin ex ham est prosciutto ad proident beef ribs anim ut Cow hamburger deserunt capicola proident tenderloin aliquip nulla et do fatback Chuck short loin tongue pork loin id Ad shoulder occaecat ham hock dolore beef ribs cillum id Id in fugiat jerky pork chop in ground round dolor sirloin pork chuck esse anim";
			$this->lorem[] = "Lorem ipsum dolor sit amet consectetur adipiscing elit Maecenas vel augue justo sed suscipit diam Nam dapibus risus et tortor tincidunt ultricies nec quis urna Fusce ullamcorper orci sit amet orci sagittis vitae luctus justo pharetra Donec quis diam mauris luctus aliquet nisi Sed tempor est viverra diam aliquet tempor Donec aliquet turpis ut dui consectetur in cursus neque fermentum Nunc viverra suscipit volutpat Praesent";
			$this->lorem[] = "Now that we know who you are I know who I am I'm not a mistake It all makes sense In a comic you know how you can tell who the arch-villain's going to be He's the exact opposite of the hero And most times they're friends like you and me I should've known way back when You know why David Because of the kids they called me Mr Glass";
			$this->lorem[] = "With extras asked the Mock Turtle a little anxiously Yes said Alice we learned French and music And washing said the Mock Turtle Certainly not said indignantly Ah then yours wasnt a really good school said the Mock Turtle in a tone of great relief Now at OURS they had at the end of the bill French music AND WASHING extra You couldn't have wanted it much said Alice living at the bottom of the sea I couldn't afford to learn it said the Mock Turtle with a sigh I only took the regular course What was that inquired Alice Reeling and Writhing of course to begin with the and then the different branches of Arithmetic Ambition Distraction Uglification and Derision I never heard of Uglification Alice ventured to say What is it The Gryphon lifted up both its paws in surprise What Never heard of uglifying it exclaimed You know what to beautify is I suppose Yes said Alice doubtfully it means to make anything prettier Well then the Gryphon went on if you dont know what to uglify is you ARE a simpleton Alice did not feel encouraged to ask any more questions about it so she turned to the Mock Turtle and said What else had you to learn Well there was Mystery the Mock";
			$this->lorem[] = "Perhaps the first thing to strike us paradoxical as it may sound to say so about the Athenian Old Comedy is its modernness Of its very nature satiric drama comes later than Epic and Lyric poetry Tragedy or History Aristophanes follows Homer and Simonides Sophocles and Thucydides Of its essence it is free from many of the conventions and restraining influences of earlier forms of literature and enjoys much of the liberty of choice of subject and license of method that marks present-day conditions of literary production both on and off the stage Its very existence presupposes a fuller and bolder intellectual life a more advanced and complex city civilization a keener taste and livelier faculty of comprehension in the people who appreciate it than could anywhere be found at an earlier epoch Speaking broadly and generally the Aristophanic drama has more in common with modern ways of looking at things more in common with the conditions of the modern stage especially in certain directions burlesque extravaganza musical farce and even pantomime than with the earlier and graver products of the Greek mind The eleven plays all that have come down to us out of a total of over forty staged by our author in the course of his long career deal with the events of the day the incidents and personages of contemporary Athenian city life playing freely over the surface of things familiar to the audience and naturally provoking their interest and rousing their prejudices dealing with contemporary local gossip contemporary art and literature and above all contemporary politics domestic and foreign All this farrago of miscellaneous subjects is treated in a frank uncompromising spirit of criticism and satire a spirit of broad fun side splitting laughter and reckless high spirits Whatever lends itself to ridicule is instantly seized upon odd eccentric and degraded personalities are caricatured social foibles and vices pilloried pomposity and sententiousness in the verses of the poets particularly the tragedians and most particularly in Euripides the pet aversion and constant butt of Aristophanes' satire are parodied All is fish that comes to the Comic dramatists net anything that will raise a laugh is fair game It is difficult to compare the Aristophanic Comedy to any one form of modern literature dramatic or other It perhaps most resembles what we now call burlesque but it had also very much in it of broad farce and comic opera and something also in the hits at the fashions and follies of the day with which it abounded of the modern pantomime But it was something more and more important to the Athenian public than any or all of these could have been Almost always more or less political and sometimes intensely personal and always with some purpose more or less important underlying its wildest vagaries and coarsest buffooneries it supplied the place of the political journal the literary review the popular caricature and the party pamphlet of our own times It combined the attractions and influence of all these for its grotesque masks and elaborate spectacle addressed the eye as strongly as the author's keenest witticisms did the ear of his audience";
			$this->lorem[] = "Fruitcake gummies apple pie icing toffee ice cream brownie Chocolate carrot cake liquorice dragee chocolate cake macaroon sweet roll Sugar plum gummi bears dessert danish jelly-o jelly souffle macaroon sesame snaps Halvah cheesecake apple pie sesame snaps sweet roll cotton candy macaroon bonbon liquorice Ice cream wafer liquorice Croissant pastry cheesecake cheesecake pie halvah Toffee gummies chocolate jujubes Wypas halvah sweet roll lollipop Gingerbread fruitcake tiramisu jelly-o danish apple pie Muffin carrot cake ice cream sweet roll croissant candy canes danish tart Chocolate bar biscuit muffin Sesame snaps pie cheesecake apple pie tootsie roll Cake wypas carrot cake pie tiramisu cookie chocolate cake Marshmallow candy canes gummi bears halvah cookie tootsie roll";
			$this->lorem[] = "Sustainable swag brunch organic kogi shoreditch gastropub retro DIY carles fingerstache authentic biodiesel Tattooed high life portland ethical try-hard pop-up chillwave cred Fixie try-hard scenester disrupt Selfies gluten-free flexitarian put a bird on it chillwave pitchfork wes anderson seitan mumblecore narwhal williamsburg etsy before they sold out vinyl dreamcatcher Odd future truffaut beard vice wolf irony cardigan vegan salvia carles street art sustainable deep v etsy Godard portland cardigan plaid sartorial banksy selvage church-key hashtag selfies retro typewriter helvetica cred tonx Disrupt vinyl organic post-ironic locavore wolf";
			$this->lorem[] = "Zebra lionfish smalltooth sawfish spotted danio eel-goby ghost flathead tetra Pacific trout ocean perch masu salmon searobin Lost River sucker Blue whiting springfish Hammerjaw roosterfish seatrout rock beauty grunt sheepshead minnow sole sailbearer pigfish European chub blue-redstripe danio roundhead Barramundi longnose dace algae eater mahseer lizardfish southern grayling luderick dottyback Quillfish scythe butterfish Pacific lamprey mrigal freshwater shark boxfish anchovy basking shark pike conger Bowfin titan triggerfish yellow tang southern hake Ratfish ribbon eel cobia Jack Dempsey loosejaw threespine stickleback albacore Sevan trout zebra danio ruffe southern grayling loach goby sailbearer flagtail trumpetfish mrigal Sixgill ray channel bass channel bass morwong scaly dragonfish rock bass spookfish surgeonfish roundhead";

			$this->type = array("Error", "Warning", "Misc", "Comment", "Bug", "Test");	
			$this->ext = array(".php",".html",".js",".css", ".rb", ".json", ".py", ".less", ".scss",
				".asp", ".aspx", ".cfm", ".yaws", ".swf", ".xhtml", ".rhtml", ".pl", ".php4", ".php3",
				".phtml", ".xml", ".rss", ".svg", ".cgi", ".dll", ".cs", ".cpp", ".atom", ".sql");
			$this->fn = array("index", "about", "contact", "services", "home", "default", "site",
				"login", "controller", "model", "view", "route");
		}

		public function getLorem($words){
			$s = "";
			for ($i=0; $i < $words ; $i++) { 
				$t = $this->lorem[rand(0, count($this->lorem) -1)];
				$t = explode(" ", $t);
				$t = $t[rand(0, count($t)-1)];
				if($i > 0){
					$s .= " " . $t;
				} else{
					$s .= $t;
				}

			}
			$s = ucfirst(strtolower($s));
			return $s;	
		}

		public function getWord($arr){
			return $arr[rand(0, count($arr)-1)];
		}

		public function getExt(){
			return $this->getWord($this->ext);
		}

		public function getName(){
			return $this->getWord($this->fn);	
		}

		public function getType(){
			return $this->getWord($this->type);
		}

	}

?>