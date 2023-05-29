<?php
global $dbPath;
include __DIR__."/../../".$dbPath."config/dashboard.php";

$string["homeNavbar"] = "Māja";
$string["welcome"] = "Laipni lūgti ".$gdps.'!';
$string["didntInstall"] = "<div style='color:#47a0ff'><b>Warning!</b> Jūs neesat pilnīgi instalējusši panēlu! Noklikšķiniet uz tekstu lai šo izdarīt.</div>";
$string["levelsWeek"] = "Līmeņi augšupielādēti nedēļas laikā";
$string["levels3Months"] = "Līmeņi augšupielādēti 3 mēnešu laikā";
$string["footer"] = $gdps.", ".date('Y', time());
$string["tipsAfterInstalling"] = "Laipni lūdzam uz panēļu! Pēc instalēšanas mēs sniedzam dažus padomus:<br>
1. Šķiet, ka SQL tabulā "Roles" ir parādījušās jaunas atļaujas! Jums to vajadzētu pārbaudīt...<br>
2. Ja mapē 'dashboard' ievietojat 'icon.png', tad jūsu GDPS ikona parādīsies augšējā kreisajā pusē!<br>
3. Jums vajadzētu konfigurēt config/dashboard.php!";
$string["wwygdt"] = "Ko jūs šodiet darīsiet?";
$string["game"] = "Spēli";
$string["guest"] = "Viesu";
$string["account"] = "Kontu";
$string["levelsOptDesc"] = "Launu līmeņu saraksts";
$string["songsOptDesc"] = "Skatīt Mūziku sarakstu";
$string["yourClanOptDesc"] = "Skatīt klanu \"%s\"";
$string["clanOptDesc"] = "Skatīt klanu sarakstu";
$string["yourProfile"] = "Jūsu profils";
$string["profileOptDesc"] = "Skatīt savu profilu";
$string["messengerOptDesc"] = "Atvert mesenžeru";
$string["addSongOptDesc"] = "Pievienot dziesmu serverim";
$string["loginOptDesc"] = "Pieteikties savā kontā";
$string["createAcc"] = "Izveidot kontu";
$string["registerOptDesc"] = "Reģistrējieties  %s";
$string["downloadOptDesc"] = "Lejuplādē %s";

$string["tryCron"] = "Palaist Cron";
$string["cronSuccess"] = "Veiksmīgi!";
$string["cronError"] = "Kļūda!";

$string["profile"] = "Profils";
$string["empty"] = "Tukšs...";
$string["writeSomething"] = "Uzrakstīt kaut ko!";  
$string["replies"] = "Atbildes";
$string["replyToComment"] = "Atbildēt uz komentāru";
$string["settings"] = "Iestatījumi";
$string["allowMessagesFrom"] = "Atļaut ziņojumus no...";
$string["allowFriendReqsFrom"] = "Atļaut draugu pieprasījumus no...";
$string["showCommentHistory"] = "Rādīt komentāru vēsturi...";
$string["yourYouTube"] = "Jūsu Youtube Kanēls";
$string["yourVK"] = "Jūsu lapu uz VK";
$string["yourTwitter"] = "Jūsu lapu uz Twitter";
$string["yourTwitch"] = "Jūsu Twitch kanēls";
$string["saveSettings"] = "Saglabāt iestatījumus";
$string["all"] = "Visi";
$string["friends"] = "Draugi";
$string["none"] = "Neviens";
$string["youBlocked"] = "Šis spēlētājs jūs bloķēja!";
$string["cantMessage"] = "Jūs nevarat nosūtīt ziņu šim spēlētājam!";
  
$string["accountManagement"] = "Kontu Pārvaldību";
$string["changePassword"] = "Mainīt parolu";
$string["changeUsername"] = "Mainīt lietotājvārdu";
$string["unlistedLevels"] = "Jūsu neuzskaitītie līmeņi";

$string["manageSongs"] = "Pārvaldīt dziesmus";
$string["gauntletManage"] = "Pārvaldīt gauntleti";
$string["suggestLevels"] = "Ieteicamie līmeņi";

$string["modTools"] = "Mod instrumenti";
$string["leaderboardBan"] = "Aizliegt lietotāju";
$string["unlistedMod"] = "Neuzskaitītie līmeņi";

$string["reuploadSection"] = "Augšupielāde";
$string["songAdd"] = "Pievienot dziesmu";
$string["songLink"] = "Pievienot dziesmu no linku";
$string["packManage"] = "Pārvaldīt map pack";

$string["browse"] = "Meklēt";
$string["statsSection"] = "Statistiki";
$string["dailyTable"] = "Dienas līmeņi";
$string["modActionsList"] = "Modu darbības";
$string["modActions"] = "Servea moderatori";
$string["gauntletTable"] = "Gauntletu saraksts";
$string["packTable"] = "Map pack saraksts";
$string["leaderboardTime"] = "Līderu tabulu progress";

$string["download"] = "Lejuplādē";
$string["forwindows"] = "Operētājsistēmai Windows";
$string["forandroid"] = "Operētājsistēmai Android";
$string["formac"] = "Operētājsistēmai Mac";
$string["forios"] = "Operētājsistēmai iOS";
$string["third-party"] = "Trešās puses";
$string["thanks"] = "Paldies šiem cilvēkiem!";
$string["language"] = "Valoda";

$string["loginHeader"] = "Laipni lūdzam, %s!";
$string["logout"] = "Izrakstīšanās";
$string["login"] = "Pieteikšanās";
$string["wrongNickOrPass"] = "Nepareizs lietotājvārds vai parole!";
$string["invalidid"] = "Nederīgs ID!";
$string["loginBox"] = "Pieteikšanās kontā";
$string["loginSuccess"] = "Jūs esat veiksmīgi pieteicies savā kontā!";
$string["loginAlready"] = "Jūs jau esat pieteicies!";
$string["clickHere"] = "Panēls";
$string["enterUsername"] = "Ievadiet lietotājvārdu";
$string["enterPassword"] = "Ievadiet Parolu";
$string["loginDesc"] = "Šeit varat pieteikties savā kontā!";

$string["register"] = "Reģistrēties";
$string["registerAcc"] = "Konta reģistrācija";
$string["registerDesc"] = "Reģistrējiet savu kontu!";
$string["repeatpassword"] = "Atkārto paroli";
$string["email"] = "Ēpastu";
$string["repeatemail"] = "Atkārtot Ēpastu";
$string["smallNick"] = "Lietotājvārds ir pārāk mazs!";
$string["smallPass"] = "Password is too small!";
$string["passDontMatch"] = "Passwords don't match!";
$string["emailDontMatch"] = "Emails don't match";
$string["registered"] = "You successfully registered an account!";

$string["changePassTitle"] = "Change password";
$string["changedPass"] = "Password successfully changed! You need to login to you account again.";
$string["wrongPass"] = "Wrong password!";
$string["samePass"] = "Passwords you entered are the same!";
$string["changePassDesc"] = "Here you can change your password!";
$string["oldPassword"] = "Old password";
$string["newPassword"] = "New password";
$string["confirmNew"] = "Confirm password";

$string["forcePassword"] = "Force change password";
$string["forcePasswordDesc"] = "Here you can force change player's password!";
$string["forceNick"] = "Force change username";
$string["forceNickDesc"] = "Here you can force change player's username!";
$string["forceChangedPass"] = "<b>%s</b>'s password has been successfully changed!";
$string["forceChangedNick"] = "<b>%s</b>'s username has been successfully changed!";
$string["changePassOrNick"] = "Change player's username or password";

$string["changeNickTitle"] = "Change username";
$string["changedNick"] = "Username successfully changed! You need to login to you account again.";
$string["wrongNick"] = "Wrong username!";
$string["sameNick"] = "Usernames you entered are the same!";
$string["alreadyUsedNick"] = "Username you entered is already taken!";
$string["changeNickDesc"] = "Here you can change your username!";
$string["oldNick"] = "Old username";
$string["newNick"] = " New username";
$string["password"] = "Password";

$string["packCreate"] = "Create a Map Pack";
$string["packCreateTitle"] = "Create a Map Pack";
$string["packCreateDesc"] = "Here you can create a Map Pack!";
$string["packCreateSuccess"] = "You successfully created a Map Pack called";
$string["packCreateOneMore"] = "One more Map Pack?";
$string["packName"] = "Name of Map Pack";
$string["color"] = "Color";
$string["sameLevels"] = "You chose the same levels!";
$string["show"] = "Show";
$string["packChange"] = "Change Map Pack";
$string["createNewPack"] = "Create new Map Pack!"; // Translate word "create" like "You'll need to create new map pack!", but its call to action

$string["gauntletCreate"] = "Create Gauntlet";
$string["gauntletCreateTitle"] = "Create Gauntlet";
$string["gauntletCreateDesc"] = "Here you can create a Gauntlet!";
$string["gauntletCreateSuccess"] = "You successfully created a Gauntlet!";
$string["gauntletCreateOneMore"] = "One more Gauntlet?";
$string["chooseLevels"] = "Choose levels!";
$string["checkbox"] = "Confirm";
$string["level1"] = "1 level";
$string["level2"] = "2 level";
$string["level3"] = "3 level";
$string["level4"] = "4 level";
$string["level5"] = "5 level";
$string["gauntletChange"] = "Change Gauntlet";
$string["createNewGauntlet"] = "Create new Gauntlet!"; // Translate word "create" like "You'll need to create new gauntlet!", but its call to action

$string["addQuest"] = "Add quest";
$string["addQuestDesc"] = "Here you can create a quest!";
$string["questName"] = "Quest name";
$string["questAmount"] = "Required amount";
$string["questReward"] = "Reward";
$string["questCreate"] = "Create a quest";
$string["questsSuccess"] = "You successfully created a quest";
$string["invalidPost"] = "Invalid data!";
$string["fewMoreQuests"] = "It's reccomend to create a few more quests.";
$string["oneMoreQuest?"] = "One more quest?";
$string["changeQuest"] = "Change quest";
$string["createNewQuest"] = "Create new quest!"; // like gauntlets and mappacks above

$string["levelReupload"] = "Reupload level";
$string["levelReuploadDesc"] = "Here you can reupload a level from any server!";
$string["advanced"] = "Advanced options";
$string["errorConnection"] = "Connection error!";
$string["levelNotFound"] = "This level doesn't exist!";
$string["robtopLol"] = "RobTop doesn't like you :c";
$string["sameServers"] = "Host server and the target server are the same!";
$string["levelReuploaded"] = "Level reuploaded! Level ID:";
$string["oneMoreLevel?"] = "One more level?";
$string["levelAlreadyReuploaded"] = "Level already reuploaded!";
$string["server"] = "Server";
$string["levelID"] = "Level ID";
$string["pageDisabled"] = "This page is disabled!";

$string["activateAccount"] = "Account activation";
$string["activateDesc"] = "Activate your account!";
$string["activated"] = "Your account has been successfully activated!";
$string["alreadyActivated"] = "Your account is already activated";
$string["maybeActivate"] = "Maybe you didn't activated your account yet.";
$string["activate"] = "Activate";
$string["activateDisabled"] = "Account activation is disabled!";

$string["addMod"] = "Add moderator";
$string["addModDesc"] = "Here you can grant a moderator!";
$string["modYourself"] = "You can't grant yourself a moderator!";
$string["alreadyMod"] = "This player is already a moderator!";
$string["addedMod"] = "You successfully granted a moderator to player";
$string["addModOneMore"] = "One more moderator?";
$string["modAboveYourRole"] = "You\'re trying to give a role above yours!";
$string["makeNewMod"] = "Make someone moderator!";
$string["reassignMod"] = "Reassign moderator";
$string["reassign"] = "Reassign";

$string["shareCPTitle"] = "Share Creator Points";
$string["shareCPDesc"] = "Here you can share Creator Points with player!";
$string["shareCP"] = "Share";
$string["alreadyShared"] = "This level already shared CP to this player!";
$string["shareToAuthor"] = "You tried to share CP to level author!";
$string["userIsBanned"] = "This player is banned!";
$string["shareCPSuccess"] = "You successfully shared Creator Points of level";
$string["shareCPSuccess2"] = "to player";
$string["updateCron"] = "Maybe you should update Creator Points.";
$string["shareCPOneMore"] = "One more share?";

$string["messenger"] = "Messenger";
$string["write"] = "Write";
$string["send"] = "Send";
$string["noMsgs"] = "Start dialog!";
$string["subject"] = "Subject";
$string["msg"] = "Message";
$string["tooFast"] = "You're typing too fast!";

$string["levelToGD"] = "Reupload level to target server";
$string["levelToGDDesc"] = "Here you can reupload your level to target server!";
$string["usernameTarget"] = "Username for target server";
$string["passwordTarget"] = "Password for target server";
$string["notYourLevel"] = "This is not your level!";
$string["reuploadFailed"] = "Level reupload error!";

$string["search"] = "Search...";
$string["searchCancel"] = "Cancel search";
$string["emptySearch"] = "Nothing found!";

$string["demonlist"] = 'Demonlist';
$string["demonlistRecord"] = '<b>%s</b>\'s record';
$string["alreadyApproved"] = 'Already approved!';
$string["alreadyDenied"] = 'Already denied!';
$string["approveSuccess"] = 'You\'ve successfully approved <b>%s</b>\'s record!';
$string["denySuccess"] = 'You\'ve successfully denied <b>%s</b>\'s record!';
$string["recordParameters"] = '<b>%s</b> has beated <b>%s</b> in <b>%d</b> attempts';
$string["approve"] = 'Approve';
$string["deny"] = 'Deny';
$string["submitRecord"] = 'Submit record';
$string["submitRecordForLevel"] = 'Submit record for <b>%s</b>';
$string["alreadySubmitted"] = 'You\'ve already submitted an record for <b>%s</b>!';
$string["submitSuccess"] = 'You\'ve successfully submitted an record for <b>%s</b>!';
$string["submitRecordDesc"] = 'Submit records only if you beated the level!';
$string["atts"] = 'Attemps';
$string["ytlink"] = 'YouTube video ID (dQw4w9WgXcQ)';
$string["submit"] = 'Submit';
$string["addDemonTitle"] = 'Add demon';
$string["addDemon"] = 'Add demon to demonlist';
$string["addedDemon"] = 'You\'ve been added <b>%s</b> to <b>%d</b> place!';
$string["addDemonDesc"] = 'Here you can add a demon to demonlist!';
$string["place"] = 'Place';
$string["giveablePoints"] = 'Giveable points';
$string["add"] = 'Add';
$string["recordApproved"] = 'Record approved!';
$string["recordDenied"] = 'Record denied!';
$string["recordSubmitted"] = 'Record submitted!';
$string["nooneBeat"] = 'noone has beaten'; //let it be lowercase
$string["oneBeat"] = '1 player has beaten'; 
$string["lower5Beat"] = '%d players have beaten'; // russian syntax, sorry
$string["above5Beat"] = '%d players have beaten'; 
$string["demonlistLevel"] = '%s <text class="dltext">by <button type="button" onclick="a(\'profile/%3$s\', true, true)" style="margin-left:7px;font-size:25px" class="accbtn" name="accountID" value="%d">%s</button></text>';
$string["noDemons"] = 'It seems that your demonlist doesn\'t have any demons...';
$string["addSomeDemons"] = 'Add some demons to fill up demonlist!';
$string["askForDemons"] = 'Ask server\'s administrator to add some!';
$string["recordList"] = 'List of records';
$string["status"] = 'Status';
$string["checkRecord"] = 'Check record';
$string["record"] = 'Record';
$string["recordDeleted"] = 'Record was deleted!';
$string["changeDemon"] = 'Change demon';
$string["demonDeleted"] = 'Demon was deleted!';
$string["changedDemon"] = 'You replaced <b>%s</b> to <b>%d</b> place!';
$string["changeDemonDesc"] = 'Here you can change a demon!<br>
If you want to delete demon, set place to 0.';

$string["didntActivatedEmail"] = 'You didn\'t activated your account through email!';
$string["checkMail"] = 'You should check your email...';

$string["likeSong"] = "Add song to favourites";
$string["dislikeSong"] = "Remove song from favourites";
$string["favouriteSongs"] = "Favourite songs";
$string["howMuchLiked"] = "How much liked?";
$string["nooneLiked"] = "Noone liked";

$string["clan"] = "Clan";
$string["joinedAt"] = "Joined clan at: <b>%s</b>";
$string["createdAt"] = "Created clan at: <b>%s</b>";
$string["clanMembers"] = "Clan members";
$string["noMembers"] = "No members";
$string["clanOwner"] = "Clan owner";
$string["noClanDesc"] = "<i>No description</i>";
$string["noClan"] = "This clan doesn't exist!";
$string["clanName"] = "Clan name";
$string["clanDesc"] = "Clan description";
$string["clanColor"] = "Clan color";
$string["dangerZone"] = "Danger zone";
$string["giveClan"] = "Give clan";
$string["deleteClan"] = "Delete clan";
$string["goBack"] = "Go back";
$string["areYouSure"] = "Are you sure?";
$string["giveClanDesc"] = "Here you can give your clan to a player.";
$string["notInYourClan"] = "This player is not in your clan!";
$string["givedClan"] = "You successfully gived your clan to <b>%s</b>!";
$string["deletedClan"] = "You deleted clan <b>%s</b>.";
$string["deleteClanDesc"] = "Here you can delete your clan.";
$string["yourClan"] = "Your clan";
$string["members0"] = "<b>1</b> member";
$string["members1"] = "<b>%d</b> members"; 
$string["members2"] = "<b>%d</b> members"; 
$string["noRequests"] = "There is no requests. Chill!";
$string["pendingRequests"] = "Clan requests";
$string["closedClan"] = "Closed clan";
$string["kickMember"] = "Kick member";
$string["leaveFromClan"] = "Leave clan";
$string["askToJoin"] = "Send join request";
$string["removeClanRequest"] = "Delete join request";
$string["joinClan"] = "Join clan";
$string["noClans"] = "There is no clans";
$string["clans"] = "Clans";
$string["alreadyInClan"] = "You're already in clan!";
$string["createClan"] = "Create clan";
$string["createdClan"] = "You successfully created clan <span style='font-weight:700;color:#%s'>%s</span>!";
$string["createClanDesc"] = "Here you can create a clan!";
$string["create"] = "Create";

/*
	REUPLOAD
*/

$string["reuploadBTN"] = "Upload";
$string["errorGeneric"] = "Error appeared!";
$string["smthWentWrong"] = "Something went wrong!";
$string["tryAgainBTN"] = "Try again";
//songAdd.php
$string["songAddDesc"] = "Here you can add your song!";
$string["songAddUrlFieldLabel"] = "Song URL: (Direct or Dropbox links only)";
$string["songAddUrlFieldPlaceholder"] = "Song URL";
$string["songAddNameFieldPlaceholder"] = "Name";
$string["songAddAuthorFieldPlaceholder"] = "Author";
$string["songAddButton"] = "Choose song";
$string["songAddAnotherBTN"] = "Another Song?";
$string["songAdded"] = "Song added!";
$string["deletedSong"] = "You successfully deleted song";
$string["renamedSong"] = "You successfully renamed song to";
$string["songID"] = "Song ID: ";
$string["songIDw"] = "Song ID";
$string["songAuthor"] = "Author";
$string["size"] = "Size";
$string["delete"] = "Delete";
$string["change"] = "Change";
$string["chooseFile"] = "Choose a song";
///errors
$string["songAddError-2"] = "Invalid URL";
$string["songAddError-3"] = "This song has been reuploaded already with ID:";
$string["songAddError-4"] = "This song isn't reuploadable";
$string["songAddError-5"] = "Song size is higher than $songSize megabytes";
$string["songAddError-6"] = "Something went wrong while uploading a song! :с";
$string["songAddError-7"] = "You can only upload audio!";

$string[400] = "Bad request!";
$string["400!"] = "Check drivers of your network hardware.";
$string[403] = "Forbidden!";
$string["403!"] = "You don't have access to this page!";
$string[404] = "Page not found!";
$string["404!"] = "Are you sure you typed address correctly?";
$string[500] = "Internal server error!";
$string["500!"] = "Coder made an mistake in the code,</br>
please say about this problem here:</br>
https://github.com/Cvolton/GMDprivateServer/pull/883";
$string[502] = "Server is down!";
$string["502!"] = "Load on the server is too big.</br>
Come back later within several hours!";

$string["invalidCaptcha"] = "Invalid captcha response!";
$string["page"] = "Page";
$string["emptyPage"] = "This page is empty!";

/*
	STATS
*/
$string["ID"] = "ID";
$string["orbs"] = "Orbs";
$string["stars"] = "Stars";
$string["coins"] = "Coins";
$string["accounts"] = "Accounts";
$string["levels"] = "Levels";
$string["songs"] = "Songs";
$string["author"] = "Creator";
$string["name"] = "Name";
$string["date"] = "Date";
$string["type"] = "Type";
$string["reportCount"] = "Report count";
$string["reportMod"] = "Reports";
$string["username"] = "Username";
$string["accountID"] = "Account ID";
$string["registerDate"] = "Register date";
$string["levelAuthor"] = "Level author";
$string["isAdmin"] = "Role on server";
$string["isAdminYes"] = "Yes";
$string["isAdminNo"] = "No";
$string["userCoins"] = "User Coins";
$string["time"] = "Time";
$string["deletedLevel"] = "Deleted Level";
$string["mod"] = "Moderator";
$string["count"] = "Amount of actions";
$string["ratedLevels"] = "Rated Levels";
$string["lastSeen"] = "Last Time Online";
$string["level"] = "Level";
$string["pageInfo"] = "Showing page %s of %s";
$string["first"] = "First";
$string["previous"] = "Previous";
$string["next"] = "Next";
$string["never"] = "Never";
$string["last"] = "Last";
$string["go"] = "Go";
$string["levelid"] = "Level ID";
$string["levelname"] = "Level name";
$string["leveldesc"] = "Level description";
$string["noDesc"] = "No description";
$string["levelpass"] = "Password";
$string["nopass"] = "No password";
$string["unrated"] = "Unrated";
$string["rate"] = "Rate";
$string["stats"] = "Stats";
$string["suggestFeatured"] = "Featured?";
$string["whoAdded"] = "Who added?";
//modActionsList
$string["banDesc"] = "Here you can ban a player from leaderboard!";
$string["playerTop"] = 'Top of players';
$string["creatorTop"] = 'Top of creators';

$string["admin"] = "Administrator";
$string["elder"] = "Elder moderator";
$string["moder"] = "Moderator";
$string["player"] = "Player";

$string["starsLevel2"] = "stars";
$string["starsLevel1"] = "stars";
$string["starsLevel0"] = "star";
$string["coins2"] = "coins";
$string["coins1"] = "coins";
$string["coins0"] = "coin";
$string["time0"] = "time";
$string["time1"] = "times";
$string["times"] = "times";
$string["action0"] = "action";
$string["action1"] = "actions";
$string["action2"] = "actions";
$string["lvl0"] = "level";
$string["lvl1"] = "levels";
$string["lvl2"] = "levels";
$string["player0"] = "player";
$string["player1"] = "players";
$string["player2"] = "players";
$string["unban"] = "Unban";
$string["isBan"] = "Ban";

$string["noCoins"] = "Without coins";
$string["noReason"] = "No reason";
$string["noActions"] = "No actions";
$string["noRates"] = "No rates";

$string["future"] = "Future";

$string["spoiler"] = "Spoiler";
$string["accid"] = "with account ID";
$string["banned"] = "was successfully banned!";
$string["unbanned"] = "was successfully unbanned!";
$string["ban"] = "Ban";
$string["nothingFound"] = "This player doesn't exist!";
$string["banUserID"] = "Username or account ID";
$string["banUserPlace"] = "Ban a user";
$string["banYourself"] = "You can't ban yourself!"; 
$string["banYourSelfBtn!"] = "Ban someone else";
$string["banReason"] = "Ban reason";
$string["action"] = "Action";
$string["value"] = "1st value";
$string["value2"] = "2nd value";
$string["value3"] = "3rd value";
$string["modAction1"] = "Rated a level";
$string["modAction2"] = "Un/featured a level";
$string["modAction3"] = "Un/verified coins";
$string["modAction4"] = "Un/epiced a level";
$string["modAction5"] = "Set as daily feature";
$string["modAction6"] = "Deleted a level";
$string["modAction7"] = "Creator change";
$string["modAction8"] = "Renamed a level";
$string["modAction9"] = "Changed level password";
$string["modAction10"] = "Changed demon difficulty";
$string["modAction11"] = "Shared CP";
$string["modAction12"] = "Un/published";
$string["modAction13"] = "Changed level description";
$string["modAction14"] = "Enabled/disabled LDM";
$string["modAction15"] = "Leaderboard un/banned";
$string["modAction16"] = "Song ID change";
$string["modAction17"] = "Created a Map Pack";
$string["modAction18"] = "Created a Gauntlet";
$string["modAction19"] = "Changed song";
$string["modAction20"] = "Granted a moderator to player";
$string["modAction21"] = "Changed Map Pack";
$string["modAction22"] = "Changed Gauntlet";
$string["modAction23"] = "Changed quest";
$string["modAction24"] = "Reassigned a player";
$string["modAction25"] = "Created a quest";
$string["modAction26"] = "Changed player's username/password";
$string["everyActions"] = "Any actions";
$string["everyMod"] = "All moderators";
$string["Kish!"] = "Go away!";
$string["noPermission"] = "You don't have permission!";
$string["noLogin?"] = "You are not logged into your account!";
$string["LoginBtn"] = "Login into account";
$string["dashboard"] = "Dashboard";
//errors
$string["errorNoAccWithPerm"] = "Error: No accounts with the '%s' permission have been found";
