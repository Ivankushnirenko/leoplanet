<?php
             require_once "connection.php";
             require_once "functions.php";	 
			 if(isset($_POST['countryval']) && $_POST['countryval']){
				 $return = selectRegion();
				 exit($return);
			 }			 
             $countries = selectCountries();
		     
 ?> 
<!DOCTYPE html>
  <html>
        <head>
			  <meta charset="utf-8">
			  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
			  <meta name="viewport" content="width=device-width" />
			  
			  
			                                      <!-- bootstrap -->
			  <script src="../js/jquery-1.10.2.min.js"></script>
			  <link href="../css/bootstrap.min.css" rel="stylesheet"/>
			  <script src="../js/bootstrap.min.js"></script>
	          <script src="http://code.jquery.com/jquery-latest.js"></script>			  
			  <script src="../orange.js"></script>
			  
			  
			                                     <!-- css -->
			  <link rel="stylesheet" href="../css/pageCSS.css">
			  <link rel="stylesheet" media="all" href="../js/animation.css"/>
			  <script type="text/javascript" src="../js/wow.min.js"></script>
			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
			  
			                                    <!-- медиа запросы -->
			   												
			  <link rel="stylesheet" href="../../media/1300px-1024px.css" media="only screen and (min-width: 1025px) and (max-width: 1300px)" type="text/css"/>
			  <link rel="stylesheet" href="../../media/1024px-870px.css" media="only screen and (min-width: 871px) and (max-width: 1024px)" type="text/css"/>
			  <link rel="stylesheet" href="../../media/870px-768px.css" media="only screen and (min-width: 769px) and (max-width: 870px)" type="text/css"/>
			  <link rel="stylesheet" href="../../media/768px-600px.css" media="only screen and (min-width: 601px) and (max-width: 768px)" type="text/css"/>
			  <link rel="stylesheet" href="../../media/600px-480px.css" media="only screen and (min-width: 481px) and (max-width: 600px)" type="text/css"/>
			  <link rel="stylesheet" href="../../media/480px-320px.css" media="only screen and (min-width: 321px) and (max-width: 480px)" type="text/css"/>
			  <link rel="stylesheet" href="../../media/320px-240px.css" media="only screen and (min-width: 200px) and (max-width: 320px)" type="text/css"/>
      			  
			  <title>ART leo planet - О нас</title>
		</head>
  
  <body style="margin-top: 0px; margin-right: 0px; margin-left: 0px; margin-bottom: 0px">

  <div id="page-ubout">
  
     <div class="page-ubout">
	     <div class="page-ubout-opis-name">
		     <div class="six-paragrapf-name wow fadeInDown" data-wow-delay="0.5s">
			     <h1 align="center" class="six-paragrapf-name-h1">О нас</h1>
				 <div class="six-paragrapf-name-rozdil">
				     <span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span>
				 </div>
			 </div>
		 </div>
		 <div class="page-ubout-opis">    
			 <div class="page-ubout-opis-left">
			     <div class="page-ubout-opis-left-top wow bounceInLeft" data-wow-duration="2s" data-wow-delay="1s">
				     <h4 class="page-ubout-opis-left-top-text" align="center">Создатель "ART leo planet"</h4>
				 </div>	
			     <div class="page-ubout-opis-left-center wow bounceInLeft" data-wow-duration="2s" data-wow-delay="1.5s">
				     <img class="page-ubout-opis-left-img" src="../img/zasnovnik-sayta.jpg" alt="img"/>
				 </div>
				 <div class="page-ubout-opis-left-bottom wow bounceInLeft" data-wow-duration="2s" data-wow-delay="2s">
					 <p class="page-ubout-opis-left-bottom-text" align="center">Кушниренко Иван Анатолиевич</p>
				 </div>		         
		     </div>
		     <div class="page-ubout-opis-right wow bounceInRight" data-wow-duration="2s" data-wow-delay="2.5s">
			     <p><span id="ArtLeoPlanet">"ART leo planet"</span> - в переводе с латинского означает планета белого льва, взятого за идею сайта. Наша студия представляет собой группу фрилансеров обучающихся в специалистов за рубежом, собранных для воплощения ваших мечтаний в реальность. Мы специализируемся на создание сайтов их продвижении и максимальной совместимости с розличными гаджетами, так же мы занимаемся web-дизайном и адаптацией сайтов, созданием логотипов и фирменных стилей, созданием и печатью визиток,листовок и рекламок, выполнением портретов на заказ. Ярким примером наших возможностей является наш собственный сайт в котором воплощение множество возможностей, стилей и эффектов используемых в создании современных сайтов</p>
		     </div>
		 </div>
	 </div>
  
     <div id="bacground-six-paragrapf">
	
	     <div id="six-paragrapf">
		     <div class="six-paragrapf-name wow fadeInUp" data-wow-delay="0.5s" data-wow-offset="200">
			     <h1 align="center" class="six-paragrapf-name-h1">Отзывы</h1>
				 <div class="six-paragrapf-name-rozdil">
				     <li class="sprite1 sprite1-six-paragrapf-name-img"></li>
				 </div>
			 </div>
			 <div class="six-paragrapf-pole">
			     <div id="six-paragrapf-pole-left" class="six-paragrapf-pole-lcr wow fadeInUp" data-wow-delay="0.5s" data-wow-offset="200">
				     <div id="six-paragrapf-pole-left-top" class="six-paragrapf-pole-lcr-top">
				         <img class="six-paragrapf-pole-lcr-top-img" src="../img/zasnovnik-sayta.jpg" alt="img"/>
				     </div>
					 <div id="six-paragrapf-pole-left-bottom" class="six-paragrapf-pole-lcr-bottom">
				         <p class="six-paragrapf-pole-lcr-bottom-text">Как засновник и один из создателей<em> A Leo Planet</em> искрене благодарен всем кто участвовал в создании сайта и студии в целом, пользуясь возможностю оставить первый отзыв заявляю что именно наш сайт есть показателем мастерства и уровня нашей работы </p>
				     </div>
				 </div>
				 <div id="six-paragrapf-pole-center" class="six-paragrapf-pole-lcr wow fadeInUp" data-wow-delay="1s" data-wow-offset="200">
				     <div id="six-paragrapf-pole-left-top" class="six-paragrapf-pole-lcr-top">
				         <img class="six-paragrapf-pole-lcr-top-img" src="../img/zasnovnik-sayta.jpg" alt="img"/>
				     </div>
					 <div id="six-paragrapf-pole-left-bottom" class="six-paragrapf-pole-lcr-bottom">
				         <p class="six-paragrapf-pole-lcr-bottom-text">Как засновник и один из создателей<em> A Leo Planet</em> искрене благодарен всем кто участвовал в создании сайта и студии в целом, пользуясь возможностю оставить первый отзыв заявляю что именно наш сайт есть показателем мастерства и уровня нашей работы </p>
				     </div>
				 </div>
				 <div id="six-paragrapf-pole-right" class="six-paragrapf-pole-lcr wow fadeInUp" data-wow-delay="1.5s" data-wow-offset="200">
				     <div id="six-paragrapf-pole-left-top" class="six-paragrapf-pole-lcr-top">
				         <img class="six-paragrapf-pole-lcr-top-img" src="../img/zasnovnik-sayta.jpg" alt="img"/>
				     </div>
					 <div id="six-paragrapf-pole-left-bottom" class="six-paragrapf-pole-lcr-bottom">
				         <p class="six-paragrapf-pole-lcr-bottom-text">Как засновник и один из создателей<em> A Leo Planet</em> искрене благодарен всем кто участвовал в создании сайта и студии в целом, пользуясь возможностю оставить первый отзыв заявляю что именно наш сайт есть показателем мастерства и уровня нашей работы </p>
				     </div>
				 </div>
			 </div>
		 </div>
		   
    </div>

	
	
	
	<div id="podval">
	   <div class="podval-context">	   
	       <div class="podval-top">
		     <div class="podval-top-left">
			     <div class="podval-top-left-top">
				     <div class="podval-top-left-top-logo">
					     <div class="podval-top-left-top-logo-left">
						     <img class="podval-top-left-top-logo-left-png" src="../img/podval-logo.png" alt="img">
						 </div>
						 <div class="podval-top-left-top-logo-right">
						     <p id="podval-top-left-top-logo-right-a1"><em>A Leo Planet</em></p>
						 </div>
					 </div>
					 <div class="podval-top-left-top-bt-copy">
					     &copy; 2016 Leo Planet, Inc. Все права защищены
					 </div>
				 </div>
				 <div class="podval-top-left-bottom">
				     <p class="citata-hristia"><span id="inhiy-shrift">&copy </span> Для нас каждый клиент - это <span id="inhiy-shrift">ПОБЕДА!</span>  Клиент удовлетворен - это <span id="inhiy-shrift">НАГРАДА!</span>  Рекомендующий клиент - это <span id="inhiy-shrift">СОКРОВИЩЕ!</span>  Клиент ставший Другом - это <span id="inhiy-shrift">ЦЕЛЬ!</span> </p>
				 </div>
			 </div>
			 
			 <div class="podval-top-center">
			     <div class="podval-top-center-dani">
				     <div class="podval-top-center-dani-icon">
					     <li class="sprite1 sprite1-podval-dani-img1"></li>
					 </div>
					 <div class="podval-top-center-dani-dani">
					     <p class="dani-text">+380661153815</p>
					 </div>
				 </div>
				 <div class="podval-top-center-dani">
				     <div class="podval-top-center-dani-icon">
					     <li class="sprite1 sprite1-podval-dani-img2"></li>
					 </div>
					 <div class="podval-top-center-dani-dani">
					     <p class="dani-text">wanko.wanko1</p>
					 </div>
				 </div>
				 <div class="podval-top-center-dani">
				     <div class="podval-top-center-dani-icon">
					     <li class="sprite1 sprite1-podval-dani-img3"></li>
					 </div>
					 <div class="podval-top-center-dani-dani">
					     <p class="dani-text">vk.com/id37900974</p>
					 </div>
				 </div>
				 <div class="podval-top-center-dani">
				     <div class="podval-top-center-dani-icon">
					     <li class="sprite1 sprite1-podval-dani-img4"></li>
					 </div>
					 <div class="podval-top-center-dani-dani">
					     <p class="dani-text">leo.planet@mail.ru</p>
					 </div>
				 </div>
				 <div class="podval-top-center-dani">
				     <div class="podval-top-center-dani-icon">
					     <li class="sprite1 sprite1-podval-dani-img5"></li>
					 </div>
					 <div class="podval-top-center-dani-dani">
					     <p class="dani-text">art.leoplanet@gmail.com </p>
					 </div>
				 </div>
				 <div class="podval-top-center-dani">
				     <div class="podval-top-center-dani-icon">
					     <li class="sprite1 sprite1-podval-dani-img6"></li>
					 </div>
					 <div class="podval-top-center-dani-dani">
					     <p class="dani-text">Украина, г. Самбор</p>
					 </div>
				 </div>
			 </div>
			 
			 <div class="podval-top-right">
			     <div class="podval-top-right-top">
				     <div class="podval-top-right-top-name">
					     <h2 class="podval-top-right-top-name-h2">Услуги</h2>
					 </div>
					 <div class="podval-top-right-top-rozdil">
					     <a class="podval-top-right-top-rozdil-a" href="#"><p class="podval-top-right-top-rozdil-p">сайты</p></a>
						 <a class="podval-top-right-top-rozdil-a" href="#"><p class="podval-top-right-top-rozdil-p">дизайн</p></a>
						 <a class="podval-top-right-top-rozdil-a" href="#"><p class="podval-top-right-top-rozdil-p">логотипы</p></a>
						 <a class="podval-top-right-top-rozdil-a" href="#"><p class="podval-top-right-top-rozdil-p">портреты</p></a>
					 </div>
				 </div>
				 <div class="podval-top-right-bottom">
				     <a href="http://vk.com" title="Група Вк" target="_blank" class="podval-top-right-bottom-a">
					    <li class="sprite1 sprite1-podval-social-img1"></li></a>
						
				     <a href="http://twitter.com" title="Страничка twitter" target="_blank" class="podval-top-right-bottom-a">
					    <li class="sprite1 sprite1-podval-social-img2"></li></a>
						
				     <a href="http://facebook" title="Страничка facebook" target="_blank" class="podval-top-right-bottom-a">
					    <li class="sprite1 sprite1-podval-social-img3"></li></a>
						
				     <a href="http://mail.com" title="Поштовый ящик mail" target="_blank" class="podval-top-right-bottom-a">
					    <li class="sprite1 sprite1-podval-social-img4"></li></a>
				 </div>
			 </div>			 
		   </div>
		   
		   <div class="podval-bottom">
		   </div>
	   </div>
	   <a name="contacts"></a>
	</div>
</div>	
	
	
    <div id="okno-registr">		
                 <div class="modal model-okno-width" id="footer-form-okno-danih">
				         <div class="modal-dialog">
						        <div class="modal-content">
								       <div class="modal-header">
									         <button class="close" type="button" data-dismiss="modal">
											          &times;
											 </button>
											 <h4 class="model-title name-model-widht"> Оформить заказ</h4>
									   </div>
									   <div class="modal-body">
									             <form role="form" class="form-sviazatsa-s-vami" method="post" action="vidpravkadanih.php">
                                                         
                                                         <label for="exampleInputEmail1">Ваше имя</label>
                                                                 <a href="#" rel="tooltip" title="Введите ваше имя чтобы мы знали как к вам обращатся">
													     <input name="formname" type="name" class="form-control" id="exampleInputEmail1"  placeholder=" Введите ваше имя"></a>
                                                               
														 
												 
												                 <h4 class="model-title name-model-widht-zviazatsia"> Св'язатся с вами?</h4>
												 
                                                         <div class="form-group sviazatsa-s-vami"> 
														         <a href="#" rel="tooltip" title="Введите ваш @meil и мы вам отпишем на него">
                                                                 <input name="formemail" type="email" class="form-control" id="exampleInputEmail1" placeholder="Отписать на ваш @ имейл"></a>
                                                         </div>
												 
												 
                                                         <div class="form-group">
                                                               <label for="exampleInputEmail1">Или</label>
															   <a href="#" rel="tooltip" title="Оставте ваш номер телефона и мы на него перезвоним">
                                                               <input name="formphone" type="phone" class="form-control" id="exampleInputEmail1" placeholder="Подзвонить на ваш номер телефона"></a>
                                                         </div>
												
												         <h4 class="model-title name-model-widht-zviazatsia2"> Выберите тему</h4>
												
												        <div id="first-select-tipe">    
															 <select name="formcountry" class="form form-control" id="country">
														         <option value="0">Что вы хотите заказать?</option>
                                                                 <?php foreach($countries as $country):?>
																       <option value="<?=$country['id_country']?>"><?=$country['country_name_ru']?></option>
																 <?php endforeach; ?>
														     </select>
														 </div>
														 <div id="divregion">
														     <select disabled name="formregion" class="form form-control form-tipe-punct" id="region">
														         <option value="0">Выберете тип вашего заказа?</option>
														     </select>  
														 </div>
                                                         
												 
												 <div class="div-knopka-otpravit-formu">
											            <input name="sendform" type="submit" class="btn btn-warning btn-cuccess knopka-otpravit-formu" href="#" value="Отправить письмо!"/>
										         </div>
                                                 </form>
									   </div>
									   <div class="modal-footer">
									         
									         
									   </div>
								</div>
                         </div>						 
                 </div>			
		</div>

		
		<footer>
		     <div id="footer-page">		         
				 <div class="footer-menu">
				     <div class="footer-vipadne-menu">
					     <div class="container footer-vipadne-menu-container-1">		     
			                 <div class="navbar navbar-inverse">
			                     <div class="container ">
				                     <div class="navbar-header">
					                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
						                     <span class="sr-only">Открыть меню</span>
							                 <span class="icon-bar"></span>
							                 <span class="icon-bar"></span>
							                 <span class="icon-bar"></span>
						                 </button>
					                 </div>
					                 <div class="collapse navbar-collapse" id="responsive-menu">
					                     <ul class="nav navbar-nav">
						                     <li class="mobile-spisok-menu"><a href="#">Главная</a></li>
							                 <li class="divider"></li>
							                 <li class="mobile-spisok-menu"><a href="#">Сайты</a></li>
							                 <li class="mobile-spisok-menu"><a href="#">Дизайн</a></li>
						                     <li class="mobile-spisok-menu"><a href="#">Логотипы</a></li>
							                 <li class="mobile-spisok-menu"><a href="#">Портреты</a></li>
							                 <li class="divider"></li>
							                 <li class="mobile-spisok-menu"><a href="#">О нас</a></li>
							                 <li class="mobile-spisok-menu"><a href="#">Карта сайта</a></li>
							                 <li class="mobile-spisok-menu"><a href="#">Контакты</a></li>
						                 </ul>
					                 </div>
				                 </div>
			                 </div>
		                 </div>
					 </div>
				     <div class="footer-menu-left">					 
						     <ul class="footer-menu-left-ul">
							     <li class="footer-menu-left-ul-li footer-menu-left-ul-li-glavnaya"><a class="footer-menu-left-ul-li-a" target="_self" href="/"><p class="footer-menu-left-ul-li-a-cnopka footer-menu-left-ul-li-a-cnopka-glavnaya">Главная</p></a></li>
								 <li class="footer-menu-left-ul-li"><a class="footer-menu-left-ul-li-a" target="_self" href="#"><p class="footer-menu-left-ul-li-a-cnopka footer-menu-left-ul-li-a-cnopka-sayti">Сайты</p></a></li>
								 <li class="footer-menu-left-ul-li"><a class="footer-menu-left-ul-li-a" target="_self" href="#"><p class="footer-menu-left-ul-li-a-cnopka footer-menu-left-ul-li-a-cnopka-disain">Дизайн</p></a></li>
								 <li class="footer-menu-left-ul-li"><a class="footer-menu-left-ul-li-a" target="_self" href="#"><p class="footer-menu-left-ul-li-a-cnopka footer-menu-left-ul-li-a-cnopka-logo">Логотипы</p></a></li>
								 <li class="footer-menu-left-ul-li"><a class="footer-menu-left-ul-li-a" target="_self" href="#"><p class="footer-menu-left-ul-li-a-cnopka footer-menu-left-ul-li-a-cnopka-portret">Портреты</p></a></li>
						     </ul>					 
					 </div>
					 <div class="footer-menu-center">
					       <a href=""><img class="footer-menu-center-png" src="../img/logo-lion-png.png" alt="img" onclick="javascript:$(window).scrollTop(0)"/></a>
					 </div>
					 <div class="footer-menu-right">
                         <ul class="footer-menu-right-ul">
							     <li class="footer-menu-right-ul-li"><a class="footer-menu-left-ul-li-a" target="_self" href="about/"><p class="footer-menu-left-ul-li-a-cnopka footer-menu-left-ul-li-a-cnopka-onas">О нас</p></a></li>
								 <li class="footer-menu-right-ul-li"><a class="footer-menu-left-ul-li-a" target="_self" href="#"><p class="footer-menu-left-ul-li-a-cnopka footer-menu-left-ul-li-a-cnopka-karta">Карта сайта</p></a></li>
								 <li class="footer-menu-right-ul-li"><a class="footer-menu-left-ul-li-a" target="_self" href="#contacts"><p class="footer-menu-left-ul-li-a-cnopka footer-menu-left-ul-li-a-cnopka-kontakti">Контакты</p></a></li>
						     </ul>						 
					 </div>
				 </div>
				 <div id="footer-knopka-zakazat">				          
                        <button type="button" class="btn btn-warning btn-cuccess footer-knopka-zakazat-png" href="#" data-toggle="modal" data-target="#footer-form-okno-danih">Заказать</button>						 
				 </div>				 
		     </div>   
		</footer>
	
     <script>
         new WOW().init();
     </script>	
	
  </body>
  </html>
 