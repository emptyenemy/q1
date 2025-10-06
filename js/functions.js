var projects = new Array('Драконы', 'Magic');
var subnames = new Array('', '');
var projects_URL = new Array('http://drako.ru', 'http://magic.ru');

var gamepic = new Array('drako.png', 'magic.png');
var shortdescr = new Array;

shortdescr[0] = 'Инновационная MMORPG. Сплав уникальных игровых особенностей от опытнейших разработчиков и современные браузерные технологии.';
shortdescr[1] = 'Яркая красочная игра с неожиданными сюрпризами и нетривиальным юмором. Здесь каждый может стать героем, сражаясь с окружающей средой и себе подобными. Более тысячи игроков прямо сейчас – присоединяйся!';

function Main_Game(project){
	var current_project = "<h1><a href='" + projects_URL[project] + "' target='_blank'>" + projects[project] + "</a></h1>";
	var subname = "<h2><a href='" + projects_URL[project] + "' target='_blank'>" + subnames[project] + "</a></h2>";
	var descr = "<p><a href='" + projects_URL[project] + "' target='_blank'>" + shortdescr[project] + "</a></p>";
	var pic = "<a href='" + projects_URL[project] + "' target='_blank'><img src='img/gamepic/" + gamepic[project] + "' /></a>";
	
	$('#Game_img img').remove();
	$('#Game_img').append(pic);

	$('#Game > h1').remove();
	$('#Game').append(current_project);
	
	$('#Game > h2').remove();
	$('#Game').append(subname);
	
	$('#Game > p').remove();
	$('#Game').append(descr);
}
function Move_Right_Games(){
	if (project < projects.length-1){
		project++;
		Main_Game(project);
	}
}
function Move_Left_Games(){
	if (project >= 1){
		project--;
		Main_Game(project);
	}
}
function GamesOnLeft(){
	var games_menu = "";
	for(i=0;i < projects.length; i++){
		games_menu = games_menu + "<table><tr><td onclick='Main_Game(" + i +");'><div class='Head'>"+ projects[i] +"</div><div class='Subhead'>"+ subnames[i] +"</div></td></tr></table>";
	}
	$('#Insight').prepend(games_menu);
}
function BrouseSize(){
//	var br_height = $(window).height();
	var br_height = window.innerHeight;
	br_height = br_height - 460;
	$('#Content').css('height', br_height);
}

window.onload = function(){
	project = 0;
	Main_Game(project);
	GamesOnLeft();
	BrouseSize();
}
