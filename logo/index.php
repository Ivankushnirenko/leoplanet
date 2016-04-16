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
		    
			                                         <!-- kodirovka -->
			  <meta charset="utf-8">
			  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
			  <meta name="viewport" content="width=device-width" />
			  
			  
			                                      <!-- bootstrap -->
			  <script src="../js/jquery-1.10.2.min.js"></script>
			  <link href="../css/bootstrap.min.css" rel="stylesheet"/>
			  <script src="../js/bootstrap.min.js"></script>
	          <script src="http://code.jquery.com/jquery-latest.js"></script>			  
			  <script src="../orange.js"></script>
		      <script src="../js/bootstrap-portfilter.min.js"></script>
		      
			                                          <!-- css -->
			  <link rel="stylesheet" href="../css/pageCSS.css">
			  <link rel="stylesheet" media="all" href="../css/animation.css"/>	
			  
			                                          <!--  JS - portfolio  -->
              <link href="../js/style.css" rel="stylesheet" type="text/css" />
              <script type="text/javascript" src="../js/jquery.min.js"></script>
              <script type="text/javascript" src="../js/jquery-ui-1.8.2.custom.min.js"></script>
              <script type="text/javascript" src="../js/pirobox_extended.js"></script>

              <script type="text/javascript">
              $(document).ready(function() {
	          $().piroBox_ext({
	          piro_speed : 700,
		      bg_alpha : 0.5,
		      piro_scroll : true // pirobox always positioned at the center of the page
	          });
              });
             </script>
			                                               
														   <!--  JS - text  -->
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
      			  
			  <title>ART leo planet - Сайты</title>
		</head>
  
  <body style="margin-top: 0px; margin-right: 0px; margin-left: 0px; margin-bottom: 0px">

  <div class="site-container">
    <div class="site-container-pole">
         <div class="container wrapper">

			<br />
			     <div class="page-zagolovna-h2">
			         <h2>Портфолио сделаных нами сайтов</h2>
				 </div>
			<hr>
			<div class="pull-center">
				<button class="btn btn-default btn-my-class-style" data-toggle="portfilter" data-target="all"> Все </button>
				<button class="btn btn-default btn-my-class-style" data-toggle="portfilter" data-target="Сайт визитка"> Сайт визитка </button>
				<button class="btn btn-default btn-my-class-style" data-toggle="portfilter" data-target="Посдочная страница"> Посдочная страница </button>
				<button class="btn btn-default btn-my-class-style" data-toggle="portfilter" data-target="Сайт портал"> Сайт портал </button>
				<button class="btn btn-default btn-my-class-style" data-toggle="portfilter" data-target="Интернет магазин"> Интернет магазин </button>
			</div>
			<div class="clearfix"></div>

			<br />

			<ul class="thumbnails gallery">
				<li class="span3 clearfix span-3-my" data-tag='Сайт визитка'>
					<div class="thumbnail">
					     <div class="thumbnail-block-my">
						     <div class="thumbnail-block-my-img">
							     <a class="grid_holder  big_spacing pirobox_gall"  href="../img/site-leoplanet.jpg" rel="gallery" title="ART leo planet." style="width: 200px; height: 200px;">
							         <div class="thumbnail-block-my-img-block">									 
									 <img class="scale-img-opasyty transition" alt="img" src="../img/site-leoplanet-min.jpg" />
									 <div class="img_overlay_icon"><span class="glyphicon transition glyphicon-camera btn-lg glipsicon-camera" aria-hidden="true"></span></div>
									 </div>
									 <div class="img_overlay_icon-p">
									     <div class="img_overlay_icon-p-background">
									     <h3 class="scale-img-opasyty-h3">ART leo planet</h3><p class="scale-img-opasyty-p">Сайт нашей студии создан для представления нашых услуг</p>
										 </div>
									 </div>
							     </a>
							 </div>
							 <div class="info_overlay">
							     <div class="info_overlay_padding">
								     <a class="grid_holder big_spacing" href="http://n66788gt.bget.ru/" target="_blank"><h3>ART leo planet</h3></a>
									 <p>Сайт-визитка</p>
								 </div>
							 </div>
						 </div>
					</div>
				</li>
				
				<li class="span3 clearfix span-3-my" data-tag='Посдочная страница'>
					<div class="thumbnail">
					     <div class="thumbnail-block-my">
						     <div class="thumbnail-block-my-img">
							     <a class="grid_holder big_spacing pirobox_gall"  href="" rel="gallery" title="Здесь будет название вашего сайта." style="width: 200px; height: 200px;">
							         <div class="thumbnail-block-my-img-block">									 
									 <img class="scale-img-opasyty transition" alt="" src="" />
									 <div class="img_overlay_icon"><span class="glyphicon transition glyphicon-camera btn-lg glipsicon-camera" aria-hidden="true"></span></div>
									 </div>
									 <div class="img_overlay_icon-p">
									     <div class="img_overlay_icon-p-background">
									     <h3 class="scale-img-opasyty-h3">Название сайта</h3><p class="scale-img-opasyty-p">Краткое описание сайта</p>
										 </div>
									 </div>
							     </a>
							 </div>
							 <div class="info_overlay">
							     <div class="info_overlay_padding">
								     <a class="grid_holder big_spacing" href="#" target="_blank"><h3>Здесь может бить ваш сайт</h3></a>
									 <p>Посадочная страница</p>
								 </div>
							 </div>
						 </div>
					</div>
				</li>
				
				<li class="span3 clearfix span-3-my" data-tag='Сайт портал'>
					<div class="thumbnail">
					     <div class="thumbnail-block-my">
						     <div class="thumbnail-block-my-img">
							     <a class="grid_holder  big_spacing pirobox_gall"  href="" rel="gallery" title="Здесь будет название вашего сайта." style="width: 200px; height: 200px;">
							         <div class="thumbnail-block-my-img-block">									 
									 <img class="scale-img-opasyty transition" alt="" src="" />
									 <div class="img_overlay_icon"><span class="glyphicon transition glyphicon-camera btn-lg glipsicon-camera" aria-hidden="true"></span></div>
									 </div>
									 <div class="img_overlay_icon-p">
									     <div class="img_overlay_icon-p-background">
									     <h3 class="scale-img-opasyty-h3">Название сайта</h3><p class="scale-img-opasyty-p">Краткое описание сайта</p>
										 </div>
									 </div>
							     </a>
							 </div>
							 <div class="info_overlay">
							     <div class="info_overlay_padding">
								     <a class="grid_holder big_spacing" href="#" target="_blank"><h3>Здесь может бить ваш сайт</h3></a>
									 <p>Сайт портал</p>
								 </div>
							 </div>
						 </div>
					</div>
				</li>
				
				<li class="span3 clearfix span-3-my" data-tag='Интернет магазин'>
					<div class="thumbnail">
					     <div class="thumbnail-block-my">
						     <div class="thumbnail-block-my-img">
							     <a class="grid_holder  big_spacing pirobox_gall"  href="" rel="gallery" title="Здесь будет название вашего сайта." style="width: 200px; height: 200px;">
							         <div class="thumbnail-block-my-img-block">									 
									 <img class="scale-img-opasyty transition" alt="" src="" />
									 <div class="img_overlay_icon"><span class="glyphicon transition glyphicon-camera btn-lg glipsicon-camera" aria-hidden="true"></span></div>
									 </div>
									 <div class="img_overlay_icon-p">
									     <div class="img_overlay_icon-p-background">
									     <h3 class="scale-img-opasyty-h3">Название сайта</h3><p class="scale-img-opasyty-p">Краткое описание сайта</p>
										 </div>
									 </div>
							     </a>
							 </div>
							 <div class="info_overlay">
							     <div class="info_overlay_padding">
								     <a class="grid_holder big_spacing" href="#" target="_blank"><h3>Здесь может бить ваш сайт</h3></a>
									 <p>Интернет магазин</p>
								 </div>
							 </div>
						 </div>
					</div>
				</li>
			</ul>
			<div class="push"></div>
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
								 <li class="footer-menu-right-ul-li"><a class="footer-menu-left-ul-li-a" target="_self" href="#kontakti"><p class="footer-menu-left-ul-li-a-cnopka footer-menu-left-ul-li-a-cnopka-kontakti">Контакты</p></a></li>
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
	 </div>
  </body>
  </html>
 