CREATE TABLE General
 (
	pId varchar(30) NOT NULL UNIQUE,
	Hometown varchar(30) NOT NULL,
	Year ENUM("FR","SO","JR","SR"),
	Position ENUM("PG","SG","SF","PF","C"),
	Season char(4) NOT NULL DEFAULT '2016',
	Date_Of_Birth DATE NOT NULL,
	CONSTRAINT PRIMARY KEY (pId),
	
	INSERT INTO General (pId, Hometown, Year, Position, Season, Date_Of_Birth)
VALUES 
	("Adam_Pischke16","Cary, IL","FR","PG","2016","1998/01/09"),
	("Anth_D'Avanzo16","Harwood Heights, IL", "FR", "C", "2016","1998/08/21"),
	("Cape_Henshaw16", "Harrisburg, IL", "SR", "SG", "2016", "1994/05/10"),
    ("Cris_Wilson16", "Cleveland, OH", "JR", "PF", "2016", "1996/01/19"),
	("Dela_Blaylock16", "Grand Rapids, MI", "SO", "SG", "2016", "1997/01/17"),
	("Dono_Oliver_Jr16", "Kewanee, IL", "FR", "SF", "2016", "1996/10/29"),
	("Eddi_Miles16", "Chicago, IL", "JR", "SG", "2016", "1995/9/20"),
	("Fran_Vukaj16", "Davison, MI", "SO", "C", "2016", "1997/06/08"),
	("Jake_Reinhart16", "Normal, IL", "SO", "PG", "2016", "1996/09/23"),
	("Jens_Soderholm16", "Peru, IL", "JR", "SF", "2016", "1994/12/29"),
	("Josh_Roberts16", "Chicago, IL", "FR", "SG", "2016", "1998/04/18"),
	("Just_Windt16", "Plainfield, IL", "FR", "SF", "2016", "1998/04/10"),
	("Mile_Simelton16", "Oswego, IL", "SR", "PG", "2016", "1995/02/02"),
	("Nick_Norton16", "Downers Grove, IL", "JR", "SF", "2016", "1995/03/08");
		
	
	
	
CREATE TABLE Combine_Data
 (
 	pId varchar(30) NOT NULL,
 	Season varchar(4) NOT NULL DEFAULT '2016',
 	Height float(4),
 	Wingspan float(4),
 	Standing_Reach float(4),
 	Weight float(4),
 	Hand_Size float(4),
 	3_Step_Vertical float(4),
 	Standing_Vertical float(4),
 	Vertical_Jump float(4),
 	Three_Quarter_Sprint float(3),
 	Lane_Agility float(3),
 	Max_Bench int(2),
 	Reaction_Shuttle float(3),
 	CONSTRAINT PRIMARY KEY (pId);
 	
 	INSERT INTO Combine_Data (pId, Season, Height, Wingspan, Standing_Reach, Weight, Hand_Size, 3_Step_Vertical, Standing_Vertical, Vertical_Jump, Three_Quarter_Sprint, Lane_Agility, Max_Bench, Reaction_Shuttle)
 VALUES
 	 ("Adam_Pischke16","2016","70.5","70","90.5","165.4","8.5","121.5","114.5","24","3.15","10.43","1","2.92"),
	 ("Anth_DAvanzo16","2016","79.5","82","100","188.8","11","137","130.5","30.5","3.38","10.83","2","2.78"),
	 ("Cape_Henshaw16","2016","74.5","76","97","189.6","9","127","124","27","3.35","10.13","16","3.04"),
	 ("Cris_Wilson16","2016","76","81","101.5","246.6","9.5","133.5","127","25.5","3.33","11.27","8","2.94"),
	 ("Dela_Blaylock16","2016","76","78","99","172","9.5","139","130","31","3.09","10.46",NULL,"2.44"),
	 ("Dono_Oliver_Jr16","2016","76","78","100.5","194.2","9.5","134","128.5","28","3.29","10.58","1","3.13"),
	 ("Eddi_Miles16","2016","74","82","100","229","9.125","134.5","126.5","26.5","3.38","10.97",NULL,"3.04"),
	 ("Fran_Vukaj16","2016","82","86","104","231","10.5","137.5","134.5","30.5","3.4","10.41","11","2.79"),
	 ("Jake_Reinhart16","2016","73.5","74","92","196.4","7.5","125","118.5","26.5","3.38","10.65","16","2.72"),
	 ("Jens_Soderholm16","2016","75.5","76","95.5","195.8","9.25",NULL,"124.5","29","3.8",NULL,"15","2.79"),
	 ("Josh_Roberts16","2016","73","80","100","189.2","10","128.5","123.5","23.5","3.56","11.38","0","2.8"),
	 ("Just_Windt16","2016","74.5","79","98","179","8.75","135","128.5","30.5","3.5","10.07","0","3.02"),
	 ("Mile_Simelton16","2016","72","72","92.5","157.4","8.5","132.5","127","34.5","3.02","11.09",NULL,"2.6"),
	 ("Nick_Norton16","2016","78","82","103","194.2","8.25","134","128","25","3.46","11.11",NULL,"3.09");
 	
 	
 	
 CREATE TABLE Traditional_Stats
  (
  	pId varchar(30) NOT NULL,
  	Opponent char(3) NOT NULL,
  	Mins int(2),
  	Points int(2),
  	Assists int(2),
  	Turnovers int(2),
  	Rebounds int(2),
  	Def_Reb int(2),
  	Off_Reb int(2),
  	FT_Made int(2),
  	FT_Att int(2),
  	3_Pt_Made int(2),
  	3_Pt_Att int(2),
  	Steals int(2),
  	Blocks int(2),
	CONSTRAINT PRIMARY KEY (pId));
	
  	
CREATE TABLE Advanced_Stats
	(
	pId varchar(30) NOT NULL,
	Opponent char(3) NOT NULL,
	Pass_Made int(4),
	Pass_Rec int(4),
	Dribbles int(4),
	CONSTRAINT PRIMARY KEY (pId));