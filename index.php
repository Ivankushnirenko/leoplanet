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
			  <script src="js/jquery-1.10.2.min.js"></script>
			  <link href="css/bootstrap.min.css" rel="stylesheet"/>
			  <script src="js/bootstrap.min.js"></script>
	          <script src="http://code.jquery.com/jquery-latest.js"></script>			  
			  <script src="orange.js"></script>
			  
			  
			                                     <!-- css -->
			  <link rel="stylesheet" href="myCSS.css">
			  <link rel="stylesheet" media="all" href="js/animation.css"/>
			  <script type="text/javascript" src="js/wow.min.js"></script>
			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
			  
			                                   <!-- медиа запросы -->
			   												
			  <link rel="stylesheet" href="./media/1300px-1024px.css" media="only screen and (min-width: 1025px) and (max-width: 1300px)" type="text/css"/>
			  <link rel="stylesheet" href="./media/1024px-870px.css" media="only screen and (min-width: 871px) and (max-width: 1024px)" type="text/css"/>
			  <link rel="stylesheet" href="./media/870px-768px.css" media="only screen and (min-width: 769px) and (max-width: 870px)" type="text/css"/>
			  <link rel="stylesheet" href="./media/768px-600px.css" media="only screen and (min-width: 601px) and (max-width: 768px)" type="text/css"/>
			  <link rel="stylesheet" href="./media/600px-480px.css" media="only screen and (min-width: 481px) and (max-width: 600px)" type="text/css"/>
			  <link rel="stylesheet" href="./media/480px-320px.css" media="only screen and (min-width: 321px) and (max-width: 480px)" type="text/css"/>
			  <link rel="stylesheet" href="./media/320px-240px.css" media="only screen and (min-width: 200px) and (max-width: 320px)" type="text/css"/>
			                 		   
			  
			                                      <!-- шрифт -->
			  <link href='https://fonts.googleapis.com/css?family=Marck+Script&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
			  <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
			  <link href='https://fonts.googleapis.com/css?family=Bad+Script&subset=latin,cyrillic' rel='stylesheet' type='text/css'>	

              			  
			  <title>ART leo planet - Главная</title>
		</head>
  
  <body style="margin-top: 0px;
               margin-right: 0px;
               margin-left: 0px;
               margin-bottom: 0px">
			                         

<div id="content-paragrapf">	
                 <div> <h1>Lova lox</h1>
                       <h2> izmena</h2>				 </div>
	<div id="bacground-first-paragrapf">
	     		 
		 <div id="bacground-first-paragrapf-fonline">		     
		 </div> 
	     
		 <div id="first-page">		
        		 <div class="left-coloumn-first-paragrapf">
			                         <div class="left-coloumn-first-disain wow fadeInLeft" data-wow-delay="0.5s">
									       <a class="moreimg" rel="nofollow" href="http://vk.com/id37900974" target="_blank">
										        <div class="moredisainimg-fon">
												      <p class="mordisainimg-fon-text">Дизайн</p>
									                  <img id="disainimg" class="moreimg" src="./img/disain.png" alt="img"/>
									            </div>
										   </a>
									 </div>
									 
									 <div class="left-coloumn-first-site wow fadeInLeft" data-wow-delay="1.5s">
									       <a class="moreimg" rel="nofollow" href="http://vk.com/id37900974" target="_blank">
										        <div class="moresiteimg-fon">
												       <p class="morsiteimg-fon-text">Сайты</p>
									                   <img id="siteimg" class="moreimg" src="./img/site.png" alt="img"/>
										        </div>
									       </a>
									</div>
			    </div>			  
		         <div id="lion">
					<img class="lion-first-paragrapf" title="animazy" src="./img/lion.gif" alt=""/>
																		   
					 <div id="name-second">
				         <h1 class="mi-garantiruem wow bounceInUp" data-wow-delay="0.3s" data-wow-offset="200" align="center">Мы гарантируем!</h1>
					     <div class="rozdil wow bounceInUp" data-wow-delay="0.5s" data-wow-offset="200">
						     <b id="rozdil-white">!</b>
					     </div>
				     </div>
		        </div>				 
                <div  id="right">			 			 		  
			         <div id="right-coloumn">
			                         <div class="right-top-portret wow fadeInRight" data-wow-delay="1s">	
                                             <a class="moreimg" rel="nofollow" href="http://vk.com/id37900974" target="_blank">		
											     <div class="moreportretimg-fon"> 
												       <p class="morportretimg-fon-text">Портреты</p>
													   <img id="portretimg" class="moreimg" src="./img/portret.png" alt="img"/>													   
												 </div> 
											 </a>
                                             											 
									 </div>
									 <div id="text-opis">
									        <p class="text-opis-p wow fadeInRight" data-wow-delay="2s"> ALP - <span id="ArtLeoPlanet">"Art Leo Planet"</span> представляет собой группу фрилансеров обучающихся у специалистов за кордоном, 
											собранных для воплощения ваших мечтаний в реальность. Мы специализируемся на создании сайтов их продвижении и 
											максимальной совместимости с разными гаджетами, так же мы занимаемся web-дизайном, созданием логотипов, 
											визиток, и портретов на заказ</p>
									 </div>	
		             </div>						 
		         </div>
		</div>	     			       
     </div>	
	
	<div id="bacground-second-paragrapf">
	
		<div id="second-paragrapf">
			      
			<div id="bacground-second-paragrapf-1">
			
			<div id="garant-page">
			<div class="left-garant-page">
				  <div class="media-garant-top wow bounceInLeft" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="200">
				        <div id="sprite1-second-paragrapf-garant">
						     <li class="sprite1 sprite1-second-paragrapf-garant-img1"></li>
						</div>
						<div class="text-garant">
						      <h3 class="text-h3">Самые низкие цены</h3>
							  <p class="text-p">Мы гарантируем вам не самые разумные цены, а самые низкие в этой сфере, так как относимся с пониманием и уважение к нашим клиентам</p>
						</div>
				  </div>
				  <div class="media-garant-bottom wow bounceInLeft" data-wow-duration="2s" data-wow-delay="1s" data-wow-offset="200">
				        <div id="sprite1-second-paragrapf-garant">
						     <li class="sprite1 sprite1-second-paragrapf-garant-img2"></li>
						</div>
						<div class="text-garant">
						      <h3 class="text-h3">Красота и оригинальность</h3>
							  <p class="text-p">Мы гарантируем вам оригинальность и красоту выполнения работы в сравнению с новейшими требованиями и стилям</p>
						</div>
				  </div>
			</div>
			<div class="center-garant-page">
				  <div class="media-garant-top wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="200">
				        <div id="sprite1-second-paragrapf-garant">
						     <li class="sprite1 sprite1-second-paragrapf-garant-img3"></li>
						</div>
						<div class="text-garant">
						      <h3 class="text-h3">Вовремя выполняем заказы</h3>
							  <p class="text-p">Мы гарантируем своевременное выполнение работ, если же работа не была выполнена в обещание строки мы гарантируем 30% скидку.</p>
						</div>
				  </div>
				  <div class="media-garant-bottom wow bounceInUp" data-wow-duration="2s" data-wow-delay="1s" data-wow-offset="200" id="media-garant-otstup-verstka">
				        <div id="sprite1-second-paragrapf-garant">
						     <li class="sprite1 sprite1-second-paragrapf-garant-img4"></li>
						</div>
						<div class="text-garant">
						      <h3 class="text-h3">Адаптивная web-верстка</h3>
							  <p class="text-p">Мы гарантируем вам полностью адаптивную web-верстку и совместимость со всеми гаджетами</p>
						</div>
				  </div>
			</div>
			<div class="right-garant-page" style="float: right">
				  <div class="media-garant-top wow bounceInRight" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="200">
				        <div id="sprite1-second-paragrapf-garant">
						     <li class="sprite1 sprite1-second-paragrapf-garant-img5"></li>
						</div>
						<div class="text-garant">
						      <h3 class="text-h3">Вы будете довольны работой</h3>
							  <p class="text-p">Cтудия ART Orange eyes гарантирует выполнение ваших заказов в точности с вашими желаниями, ведь наша работа воплощать ваши мечты в реальность.</p>
						</div>
				  </div>
				  <div class="media-garant-bottom wow bounceInRight" data-wow-duration="2s" data-wow-delay="1s" data-wow-offset="200" id="media-garant-otstup-svias">
				        <div id="sprite1-second-paragrapf-garant">
						     <li class="sprite1 sprite1-second-paragrapf-garant-img6"></li>
						</div>
						<div class="text-garant">
						      <h3 class="text-h3">Беспосредственная связь</h3>
							  <p class="text-p">Мы гарантируем бес посредственную связь с исполнительными лицами без посредников и менеджеров</p>
						</div>
				  </div>
			</div>
			</div>
			</div>
		</div>
	</div> 
	
	<div id="bacground-third-paragrapf">	
		    			 
		     <div id="third-paragrapf-480"> 
                 <div class="third-paragrapf-480-site">
				     <div class="third-paragrapf-480-site-name">
					     <div id="cena1-carusel-birka-name">
				             <h1 align="center" class="cena1-carusel-birka-name-shadow">ЦЕНЫ</h1>
						     <div class="cena1-carusel-birka-name-rozdil">
						         <b id="cena1-carusel-birka-name-rozdil-little">на сайты</b>
						    </div>
				         </div>
					 </div>
					 <div class="third-paragrapf-480-site-block">
					     <div class="cena1-carusel-birka-block">     
							     <li class="sprite1 sprite1-third-paragrapf-cena1-600-img1"></li>
								 <li class="sprite1 sprite1-third-paragrapf-cena1-600-img2"></li>
								 <li class="sprite1 sprite1-third-paragrapf-cena1-600-img3"></li>
								 <li class="sprite1 sprite1-third-paragrapf-cena1-600-img4"></li>
						 </div>
					 </div>
                 </div>	
                 <div class="third-paragrapf-480-disain">
				     <div class="third-paragrapf-480-site-name">
					     <div id="cena1-carusel-birka-name">
				             <h1 align="center" class="cena1-carusel-birka-name-shadow">ЦЕНЫ</h1>
						     <div class="cena1-carusel-birka-name-rozdil">
						         <b id="cena1-carusel-birka-name-rozdil-little">на дизайн</b>
						     </div>
				         </div>
					 </div>
					 <div class="third-paragrapf-480-site-block">
					     <div class="cena1-carusel-birka-block">
                             <li class="sprite1 sprite1-third-paragrapf-cena2-600-img1"></li>
							 <li class="sprite1 sprite1-third-paragrapf-cena2-600-img2"></li>									         
	                     </div>		
					 </div>
                 </div>	
                 <div class="third-paragrapf-480-logo">
				     <div class="third-paragrapf-480-site-name">
					      <div id="cena1-carusel-birka-name">
				             <h1 align="center" class="cena1-carusel-birka-name-shadow">ЦЕНЫ</h1>
						     <div class="cena1-carusel-birka-name-rozdil">
						         <b id="cena1-carusel-birka-name-rozdil-little">на логотипы</b>
						     </div>
				         </div>
					 </div>
					 <div class="third-paragrapf-480-site-block">
					     <div class="cena2-carusel-birka-block">
							 <li class="sprite1 sprite1-third-paragrapf-cena3-600-img1"></li>
							 <li class="sprite1 sprite1-third-paragrapf-cena3-600-img2"></li>
							 <li class="sprite1 sprite1-third-paragrapf-cena3-600-img3"></li>
	                     </div>	
					 </div>
                 </div>	
                 <div class="third-paragrapf-480-portret">
				     <div class="third-paragrapf-480-site-name">
					     <div id="cena1-carusel-birka-name">
				             <h1 align="center" class="cena1-carusel-birka-name-shadow">ЦЕНЫ</h1>
						     <div class="cena1-carusel-birka-name-rozdil">
						         <b id="cena1-carusel-birka-name-rozdil-little">на портреты</b>
						     </div>
				         </div>
					 </div>
					 <div class="third-paragrapf-480-site-block">
					     <div class="cena2-carusel-birka-block">
							 <li class="sprite1 sprite1-third-paragrapf-cena4-600-img1"></li>
							 <li class="sprite1 sprite1-third-paragrapf-cena4-600-img2"></li>
							 <li class="sprite1 sprite1-third-paragrapf-cena4-600-img3"></li>
	                     </div>	
					 </div>
                 </div>					 
		     </div>	
		
		     <div id="hexagon-block">				    
				 
				     <div id="carousel-example-generic" class="carousel slide carusel-position" data-pause="carousel">
                                       
                     <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                     </ol>

                                     
                     <div class="carousel-inner work-rombick" role="listbox">
                         <div id="hexagon-img1-third-paragrapf" class="item active">
                                 <div class="carousel-caption carusel-cena1-pole">
								        <div class="cena1-carusel-birka-name">
										      <div id="cena1-carusel-birka-name" class="wow wobble" data-wow-delay="0.5s" data-wow-offset="200">
				                                          <h1 align="center" class="cena1-carusel-birka-name-shadow">ЦЕНЫ</h1>
						                            <div class="cena1-carusel-birka-name-rozdil">
						                                  <b id="cena1-carusel-birka-name-rozdil-little">на сайты</b>
						                            </div>
				                              </div>
										</div>
										<div class="cena1-carusel-birka-block">									
											 <li class="sprite1 sprite1-third-paragrapf-cena1-img1 wow swing" data-wow-duration="2.5s" data-wow-delay="0.1s" data-wow-offset="300"></li>
											 <li class="sprite1 sprite1-third-paragrapf-cena1-img2 wow swing" data-wow-duration="2s" data-wow-delay="0.8s" data-wow-offset="300"></li>
											 <li class="sprite1 sprite1-third-paragrapf-cena1-img3 wow swing" data-wow-duration="2.8s" data-wow-delay="0.3s" data-wow-offset="300"></li>
											 <li class="sprite1 sprite1-third-paragrapf-cena1-img4 wow swing" data-wow-duration="2.4s" data-wow-delay="0.5s" data-wow-offset="300"></li>
										</div>
								 </div>
                         </div>
						 <div id="hexagon-img2-third-paragrapf" class="item">
                                 <div class="carousel-caption carusel-cena1-pole">
								         <div class="cena1-carusel-birka-name">
										      <div id="cena1-carusel-birka-name" class="wow wobble" data-wow-delay="0.5s">
				                                          <h1 align="center" class="cena1-carusel-birka-name-shadow">ЦЕНЫ</h1>
						                            <div class="cena1-carusel-birka-name-rozdil">
						                                  <b id="cena1-carusel-birka-name-rozdil-little">на дизайн</b>
						                            </div>
				                              </div>
										</div>
										<div class="cena1-carusel-birka-block">     
											 <li class="sprite1 sprite1-third-paragrapf-cena2-img1 wow swing" data-wow-duration="1.2s" data-wow-delay="1.8s"></li>
											 <li class="sprite1 sprite1-third-paragrapf-cena2-img2 wow swing" data-wow-duration="1.8s" data-wow-delay="1.3s"></li>									         
	                                    </div>										  
	                             </div>
                         </div>
						 <div id="hexagon-img3-third-paragrapf" class="item">
                                 <div class="carousel-caption carusel-cena1-pole">
								         <div class="cena1-carusel-birka-name">
										      <div id="cena1-carusel-birka-name" class="wow wobble" data-wow-delay="0.5s">
				                                          <h1 align="center" class="cena1-carusel-birka-name-shadow">ЦЕНЫ</h1>
						                            <div class="cena1-carusel-birka-name-rozdil">
						                                  <b id="cena1-carusel-birka-name-rozdil-little">на логотипы</b>
						                            </div>
				                              </div>
										</div>
										<div class="cena1-carusel-birka-block">     
											 <li class="sprite1 sprite1-third-paragrapf-cena3-img1 wow swing" data-wow-duration="2.5s" data-wow-delay="0.3s"></li>
											 <li class="sprite1 sprite1-third-paragrapf-cena3-img2 wow swing" data-wow-duration="1.5s" data-wow-delay="0.1s"></li>
											 <li class="sprite1 sprite1-third-paragrapf-cena3-img3 wow swing" data-wow-duration="2.4s" data-wow-delay="0.5s"></li>
	                                    </div>						 
	                             </div>
                         </div>
						 <div id="hexagon-img4-third-paragrapf" class="item">
                                 <div class="carousel-caption carusel-cena1-pole">
								         <div class="cena1-carusel-birka-name">
										      <div id="cena1-carusel-birka-name" class="wow wobble" data-wow-delay="0.5s">
				                                          <h1 align="center" class="cena1-carusel-birka-name-shadow">ЦЕНЫ</h1>
						                            <div class="cena1-carusel-birka-name-rozdil">
						                                  <b id="cena1-carusel-birka-name-rozdil-little">на портреты</b>
						                            </div>
				                              </div>
										</div>
										<div class="cena1-carusel-birka-block">     
											 <li class="sprite1 sprite1-third-paragrapf-cena4-img1 wow swing" data-wow-duration="1.5s" data-wow-delay="0.5s"></li>
											 <li class="sprite1 sprite1-third-paragrapf-cena4-img2 wow swing" data-wow-duration="2.8s" data-wow-delay="0.3s"></li>
											 <li class="sprite1 sprite1-third-paragrapf-cena4-img3 wow swing" data-wow-duration="2.5s" data-wow-delay="0.1s"></li>
	                                    </div>											 
	                             </div>
                         </div>    
                     </div>

                                             
                     <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                         <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                         <span class="sr-only">Previous</span>
                     </a>
                     <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                         <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                         <span class="sr-only">Next</span>
                     </a>
                     </div>				  
             </div>			 
	</div>	
	
	<div id="bacground-fourth-paragrapf">
		<div id="fourth-paragrapf">
		
		       <div class="name-fourth wow fadeInUp" data-wow-delay="0.5s" data-wow-offset="200">
		      	     <div class="name-zakaz">
					             <h1 align="center" class="name-zakaz-h1">Как заказать</h1>
					       <div class="rozdil-zakaz">
						         <b class="rozdil-zakaz-p">Проще некуда</b>
					       </div>
					 </div>
			  </div>
			  
			  <div class="proces-zakaz wow fadeInUp" data-wow-delay="0.5s" data-wow-offset="200">
			        <div>
					 <img class="proces-zakaz-img" src="./img/kak-zakazat-proces.png" alt="img">
			        </div>
			  </div>
			  
			  <div class="proces-zakaz-480">
			     <div class="proces-zakaz-480-block-1">
				     <div class="proces-zakaz-480-block-1-top">
					     <li class="sprite1 sprite1-fourth-paragrapf-zakaz-480-img1"></li>
					 </div>
					 <div class="proces-zakaz-480-block-1-bottom">
					     <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
					 </div>
				 </div>
				 <div class="proces-zakaz-480-block-2">
				     <div class="proces-zakaz-480-block-2-top">
					     <li class="sprite1 sprite1-fourth-paragrapf-zakaz-480-img2"></li>
					 </div>
					 <div class="proces-zakaz-480-block-1-bottom">
					     <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
					 </div>
				 </div>
				 <div class="proces-zakaz-480-block-3">
				     <div class="proces-zakaz-480-block-3-top">
					    <li class="sprite1 sprite1-fourth-paragrapf-zakaz-480-img3"></li>
					 </div>
					 <div class="proces-zakaz-480-block-3-bottom">
					     <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
					 </div>
				 </div>
				 <div class="proces-zakaz-480-block-4">
				     <div class="proces-zakaz-480-block-4-top">
					     <li class="sprite1 sprite1-fourth-paragrapf-zakaz-480-img4"></li>
					 </div>
					 <div class="proces-zakaz-480-block-4-bottom">
					     <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
					 </div>
				 </div>
				 <div class="proces-zakaz-480-block-5">
				     <div class="proces-zakaz-480-block-5-top">
					     <li class="sprite1 sprite1-fourth-paragrapf-zakaz-480-img5"></li>
					 </div>
					 <div class="proces-zakaz-480-block-5-bottom">
					     <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
					 </div>
				 </div>
				 <div class="proces-zakaz-480-block-6">
				     <div class="proces-zakaz-480-block-6-top">
					     <li class="sprite1 sprite1-fourth-paragrapf-zakaz-480-img6"></li>
					 </div>
				 </div>
			  </div>
		</div>
	</div>
	 
	<div id="bacground-fife-paragrapf">
	
	    <div id="name-fife">
			              <h1 align="center" class="name-fife-h1 wow fadeInRight" data-wow-delay="0.5s" data-wow-offset="100">Последние работы</h1>	
                 <div class="tabs">
				     <div class="bacground-fife-paragrapf-tab">
                         <div class="tab-background-top wow fadeInLeft" data-wow-delay="1s" data-wow-offset="200">
						     <ul class="nav nav-tabs" id="nav-tabs-miy">
                                 <li class="active"><a href="#tab1" data-toggle="tab" class="color-tab-text">Сайты</a></li>
                                 <li class="color-tab-text-li"><a href="#tab2" data-toggle="tab" class="color-tab-text">Дизайн</a></li>
							     <li class="color-tab-text-li"><a href="#tab3" data-toggle="tab" class="color-tab-text">Логотипы</a></li>
							     <li class="color-tab-text-li"><a href="#tab4" data-toggle="tab" class="color-tab-text">Портреты</a></li>
                             </ul>
						 </div>
						 
						 <div class="tab-background-top-2">
						     <ul class="nav nav-tabs" id="nav-tabs-2">
                                 <li class="active" id="color-tab-text-padding"><a href="#tab1" data-toggle="tab" class="color-tab-text">Сайты</a></li>
                                 <li class="color-tab-text-li"><a href="#tab2" data-toggle="tab" class="color-tab-text">Дизайн</a></li>
							     <li class="color-tab-text-li"><a href="#tab3" data-toggle="tab" class="color-tab-text">Логотипы</a></li>
							     <li class="color-tab-text-li"><a href="#tab4" data-toggle="tab" class="color-tab-text">Портреты</a></li>
                             </ul>
						 </div>
						 
						 <div id="tab-background">
                             <div class="tab-content">
							 
                                 <div class="tab-pane active" id="tab1">
								     <div class="fife-paragrapf-tab-pane-pole">
									 <div class="fife-paragrapf-tab-pane-pole-control">
									     <div id="fife-paragrapf-tab-pane-pole-left" class="fife-paragrapf-tab-pane-pole-lf-widht">
                                             <div id="fife-paragrapf-tab-pane-pole-left-top" class="fife-paragrapf-tab-pane-pole-left-tb-width">
                                             	 <div id="fife-paragrapf-tab-pane-pole-left-top-left" class="fife-paragrapf-tab-pane-pole-left-top-lftb-widht">
												     <div class="morph pic morph-pic-my">
                                                         
                                                     </div>	
                                                 </div>	
                                                 <div id="fife-paragrapf-tab-pane-pole-left-top-right" class="fife-paragrapf-tab-pane-pole-left-top-lftb-widht">
												     <div class="morph pic morph-pic-my">
                                                         
                                                     </div>	
                                                 </div>													 
										     </div>	
                                             <div id="fife-paragrapf-tab-pane-pole-left-bottom" class="fife-paragrapf-tab-pane-pole-left-tb-width">
                                             	 <div id="fife-paragrapf-tab-pane-pole-left-bottom-left" class="fife-paragrapf-tab-pane-pole-left-top-lftb-widht">
												     <div class="morph pic morph-pic-my">
                                                         
                                                     </div>	
                                                 </div>	
                                                 <div id="fife-paragrapf-tab-pane-pole-left-bottom-right" class="fife-paragrapf-tab-pane-pole-left-top-lftb-widht">
												     <div class="morph pic morph-pic-my">
                                                         
                                                     </div>	
                                                 </div>												 
										     </div>											 
										 </div>
										 <div id="fife-paragrapf-tab-pane-pole-right" class="fife-paragrapf-tab-pane-pole-lf-widht">
                                             <div id="fife-paragrapf-tab-pane-pole-right-top" class="fife-paragrapf-tab-pane-pole-left-tb-width">
                                             	 <div id="fife-paragrapf-tab-pane-pole-right-top-left" class="fife-paragrapf-tab-pane-pole-left-top-lftb-widht">
												     <div class="morph pic morph-pic-my">
                                                         
                                                     </div>	
                                                 </div>	
                                                 <div id="fife-paragrapf-tab-pane-pole-right-top-right" class="fife-paragrapf-tab-pane-pole-left-top-lftb-widht">
												     <div class="morph pic morph-pic-my">
                                                         
                                                     </div>	
                                                 </div>													 
										     </div>	
                                             <div id="fife-paragrapf-tab-pane-pole-right-bottom" class="fife-paragrapf-tab-pane-pole-left-tb-width">
                                             	 <div id="fife-paragrapf-tab-pane-pole-right-bottom-left" class="fife-paragrapf-tab-pane-pole-left-top-lftb-widht">
												     <div class="morph pic morph-pic-my">
                                                         
                                                     </div>	
                                                 </div>	
                                                 <div id="fife-paragrapf-tab-pane-pole-right-bottom-right" class="fife-paragrapf-tab-pane-pole-left-top-lftb-widht">
												     <div class="morph pic morph-pic-my">
                                                         
                                                     </div>	
                                                 </div>												 
										     </div>											 
										 </div>
									 </div>
                                    </div>									 
                                 </div>
                                
								 <div class="tab-pane" id="tab2">                                 
								     <div class="fife-paragrapf-tab-pane-pole">
									 <div class="fife-paragrapf-tab-pane-pole-control">
									     <div id="fife-paragrapf-tab-pane-pole-left" class="fife-paragrapf-tab-pane-pole-lf-widht">
                                             <div id="fife-paragrapf-tab-pane-pole-left-top" class="fife-paragrapf-tab-pane-pole-left-tb-width">
                                             	 <div id="fife-paragrapf-tab-pane-pole-left-top-left" class="fife-paragrapf-tab-pane-pole-left-top-lftb-widht">
												     <div class="morph pic morph-pic-my">
                                                         
                                                     </div>	
                                                 </div>	
                                                 <div id="fife-paragrapf-tab-pane-pole-left-top-right" class="fife-paragrapf-tab-pane-pole-left-top-lftb-widht">
												     <div class="morph pic morph-pic-my">
                                                         
                                                     </div>	
                                                 </div>													 
										     </div>	
                                             <div id="fife-paragrapf-tab-pane-pole-left-bottom" class="fife-paragrapf-tab-pane-pole-left-tb-width">
                                             	 <div id="fife-paragrapf-tab-pane-pole-left-bottom-left" class="fife-paragrapf-tab-pane-pole-left-top-lftb-widht">
												     <div class="morph pic morph-pic-my">
                                                         
                                                     </div>	
                                                 </div>	
                                                 <div id="fife-paragrapf-tab-pane-pole-left-bottom-right" class="fife-paragrapf-tab-pane-pole-left-top-lftb-widht">
												     <div class="morph pic morph-pic-my">
                                                         
                                                     </div>	
                                                 </div>												 
										     </div>											 
										 </div>
										 <div id="fife-paragrapf-tab-pane-pole-right" class="fife-paragrapf-tab-pane-pole-lf-widht">
                                             <div id="fife-paragrapf-tab-pane-pole-right-top" class="fife-paragrapf-tab-pane-pole-left-tb-width">
                                             	 <div id="fife-paragrapf-tab-pane-pole-right-top-left" class="fife-paragrapf-tab-pane-pole-left-top-lftb-widht">
												     <div class="morph pic morph-pic-my">
                                                         
                                                     </div>	
                                                 </div>	
                                                 <div id="fife-paragrapf-tab-pane-pole-right-top-right" class="fife-paragrapf-tab-pane-pole-left-top-lftb-widht">
												     <div class="morph pic morph-pic-my">
                                                         
                                                     </div>	
                                                 </div>													 
										     </div>	
                                             <div id="fife-paragrapf-tab-pane-pole-right-bottom" class="fife-paragrapf-tab-pane-pole-left-tb-width">
                                             	 <div id="fife-paragrapf-tab-pane-pole-right-bottom-left" class="fife-paragrapf-tab-pane-pole-left-top-lftb-widht">
												     <div class="morph pic morph-pic-my">
                                                         
                                                     </div>	
                                                 </div>	
                                                 <div id="fife-paragrapf-tab-pane-pole-right-bottom-right" class="fife-paragrapf-tab-pane-pole-left-top-lftb-widht">
												     <div class="morph pic morph-pic-my">
                                                         
                                                     </div>	
                                                 </div>												 
										     </div>											 
										 </div>
									 </div>
									 </div>									 
                                 </div>
							     
								 <div class="tab-pane" id="tab3">
								     <div class="fife-paragrapf-tab-pane-pole">
									 <div class="fife-paragrapf-tab-pane-pole-control">
									     <div id="fife-paragrapf-tab-pane-pole-left" class="fife-paragrapf-tab-pane-pole-lf-widht">
                                             <div id="fife-paragrapf-tab-pane-pole-left-top" class="fife-paragrapf-tab-pane-pole-left-tb-width">
                                             	 <div id="fife-paragrapf-tab-pane-pole-left-top-left" class="fife-paragrapf-tab-pane-pole-left-top-lftb-widht">
												     <div class="morph pic morph-pic-my">
                                                         <img class="portfolio-portret-img" src="./img/portfolio-logo-img1.png" alt="img">
                                                     </div>	
                                                 </div>	
                                                 <div id="fife-paragrapf-tab-pane-pole-left-top-right" class="fife-paragrapf-tab-pane-pole-left-top-lftb-widht">
												     <div class="morph pic morph-pic-my">
                                                         <img class="portfolio-portret-img" src="./img/portfolio-logo-img2.jpg" alt="img">
                                                     </div>	
                                                 </div>													 
										     </div>	
                                             <div id="fife-paragrapf-tab-pane-pole-left-bottom" class="fife-paragrapf-tab-pane-pole-left-tb-width">
                                             	 <div id="fife-paragrapf-tab-pane-pole-left-bottom-left" class="fife-paragrapf-tab-pane-pole-left-top-lftb-widht">
												     <div class="morph pic morph-pic-my">
                                                         <img class="portfolio-portret-img" src="./img/portfolio-logo-img3.jpg" alt="img">
                                                     </div>	
                                                 </div>	
                                                 <div id="fife-paragrapf-tab-pane-pole-left-bottom-right" class="fife-paragrapf-tab-pane-pole-left-top-lftb-widht">
												     <div class="morph pic morph-pic-my">
                                                         <img class="portfolio-portret-img" src="./img/portfolio-logo-img4.jpg" alt="img">
                                                     </div>	
                                                 </div>												 
										     </div>											 
										 </div>
										 <div id="fife-paragrapf-tab-pane-pole-right" class="fife-paragrapf-tab-pane-pole-lf-widht">
                                             <div id="fife-paragrapf-tab-pane-pole-right-top" class="fife-paragrapf-tab-pane-pole-left-tb-width">
                                             	 <div id="fife-paragrapf-tab-pane-pole-right-top-left" class="fife-paragrapf-tab-pane-pole-left-top-lftb-widht">
												     <div class="morph pic morph-pic-my">
                                                         <img class="portfolio-portret-img" src="./img/portfolio-logo-img5.jpg" alt="img">
                                                     </div>	
                                                 </div>	
                                                 <div id="fife-paragrapf-tab-pane-pole-right-top-right" class="fife-paragrapf-tab-pane-pole-left-top-lftb-widht">
												     <div class="morph pic morph-pic-my">
                                                         <img class="portfolio-portret-img" src="./img/portfolio-logo-img6.jpg" alt="img">
                                                     </div>	
                                                 </div>													 
										     </div>	
                                             <div id="fife-paragrapf-tab-pane-pole-right-bottom" class="fife-paragrapf-tab-pane-pole-left-tb-width">
                                             	 <div id="fife-paragrapf-tab-pane-pole-right-bottom-left" class="fife-paragrapf-tab-pane-pole-left-top-lftb-widht">
												     <div class="morph pic morph-pic-my">
                                                         <img class="portfolio-portret-img" src="./img/portfolio-logo-img7.jpg" alt="img">
                                                     </div>	
                                                 </div>	
                                                 <div id="fife-paragrapf-tab-pane-pole-right-bottom-right" class="fife-paragrapf-tab-pane-pole-left-top-lftb-widht">
												     <div class="morph pic morph-pic-my">
                                                         <img class="portfolio-portret-img" src="./img/portfolio-logo-img8.jpg" alt="img">
                                                     </div>	
                                                 </div>												 
										     </div>											 
										 </div>
										 </div>
									 </div>
                                 </div>
							     
								 <div class="tab-pane" id="tab4">
                                     <div class="fife-paragrapf-tab-pane-pole">
									 <div class="fife-paragrapf-tab-pane-pole-control">
									     <div id="fife-paragrapf-tab-pane-pole-left" class="fife-paragrapf-tab-pane-pole-lf-widht">
                                             <div id="fife-paragrapf-tab-pane-pole-left-top" class="fife-paragrapf-tab-pane-pole-left-tb-width">
                                             	 <div id="fife-paragrapf-tab-pane-pole-left-top-left" class="fife-paragrapf-tab-pane-pole-left-top-lftb-widht">
												     <div class="morph pic morph-pic-my">
                                                         <img class="portfolio-portret-img" src="./img/portfolio-portret-img1.jpg" alt="img">
                                                     </div>	
                                                 </div>	
                                                 <div id="fife-paragrapf-tab-pane-pole-left-top-right" class="fife-paragrapf-tab-pane-pole-left-top-lftb-widht">
												     <div class="morph pic morph-pic-my">
                                                         <img class="portfolio-portret-img" src="./img/portfolio-portret-img2.jpg" alt="img">
                                                     </div>	
                                                 </div>													 
										     </div>	
                                             <div id="fife-paragrapf-tab-pane-pole-left-bottom" class="fife-paragrapf-tab-pane-pole-left-tb-width">
                                             	 <div id="fife-paragrapf-tab-pane-pole-left-bottom-left" class="fife-paragrapf-tab-pane-pole-left-top-lftb-widht">
												     <div class="morph pic morph-pic-my">
                                                         <img class="portfolio-portret-img" src="./img/portfolio-portret-img3.jpg" alt="img">
                                                     </div>	
                                                 </div>	
                                                 <div id="fife-paragrapf-tab-pane-pole-left-bottom-right" class="fife-paragrapf-tab-pane-pole-left-top-lftb-widht">
												     <div class="morph pic morph-pic-my">
                                                         <img class="portfolio-portret-img" src="./img/portfolio-portret-img4.jpg" alt="img">
                                                     </div>	
                                                 </div>												 
										     </div>											 
										 </div>
										 <div id="fife-paragrapf-tab-pane-pole-right" class="fife-paragrapf-tab-pane-pole-lf-widht">
                                             <div id="fife-paragrapf-tab-pane-pole-right-top" class="fife-paragrapf-tab-pane-pole-left-tb-width">
                                             	 <div id="fife-paragrapf-tab-pane-pole-right-top-left" class="fife-paragrapf-tab-pane-pole-left-top-lftb-widht">
												     <div class="morph pic morph-pic-my">
                                                         <img class="portfolio-portret-img" src="./img/portfolio-portret-img5.jpg" alt="img">
                                                     </div>	
                                                 </div>	
                                                 <div id="fife-paragrapf-tab-pane-pole-right-top-right" class="fife-paragrapf-tab-pane-pole-left-top-lftb-widht">
												     <div class="morph pic morph-pic-my">
                                                         <img class="portfolio-portret-img" src="./img/portfolio-portret-img6.jpg" alt="img">
                                                     </div>	
                                                 </div>													 
										     </div>	
                                             <div id="fife-paragrapf-tab-pane-pole-right-bottom" class="fife-paragrapf-tab-pane-pole-left-tb-width">
                                             	 <div id="fife-paragrapf-tab-pane-pole-right-bottom-left" class="fife-paragrapf-tab-pane-pole-left-top-lftb-widht">
												     <div class="morph pic morph-pic-my">
                                                         <img class="portfolio-portret-img" src="./img/portfolio-portret-img7.jpg" alt="img">
                                                     </div>	
                                                 </div>	
                                                 <div id="fife-paragrapf-tab-pane-pole-right-bottom-right" class="fife-paragrapf-tab-pane-pole-left-top-lftb-widht">
												     <div class="morph pic morph-pic-my">
                                                         <img class="portfolio-portret-img" src="./img/portfolio-portret-img8.jpg" alt="img">
                                                     </div>	
                                                 </div>												 
										     </div>											 
										 </div>
									 </div>
									 </div>
                                 </div>
								 
                             </div>	
				         </div>
                     </div>
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
				         <img class="six-paragrapf-pole-lcr-top-img" src="./img/zasnovnik-sayta.jpg" alt="img"/>
				     </div>
					 <div id="six-paragrapf-pole-left-bottom" class="six-paragrapf-pole-lcr-bottom">
				         <p class="six-paragrapf-pole-lcr-bottom-text">Как засновник и один из создателей<em> A Leo Planet</em> искрене благодарен всем кто участвовал в создании сайта и студии в целом, пользуясь возможностю оставить первый отзыв заявляю что именно наш сайт есть показателем мастерства и уровня нашей работы </p>
				     </div>
				 </div>
				 <div id="six-paragrapf-pole-center" class="six-paragrapf-pole-lcr wow fadeInUp" data-wow-delay="1s" data-wow-offset="200">
				     <div id="six-paragrapf-pole-left-top" class="six-paragrapf-pole-lcr-top">
				         <img class="six-paragrapf-pole-lcr-top-img" src="./img/zasnovnik-sayta.jpg" alt="img"/>
				     </div>
					 <div id="six-paragrapf-pole-left-bottom" class="six-paragrapf-pole-lcr-bottom">
				         <p class="six-paragrapf-pole-lcr-bottom-text">Как засновник и один из создателей<em> A Leo Planet</em> искрене благодарен всем кто участвовал в создании сайта и студии в целом, пользуясь возможностю оставить первый отзыв заявляю что именно наш сайт есть показателем мастерства и уровня нашей работы </p>
				     </div>
				 </div>
				 <div id="six-paragrapf-pole-right" class="six-paragrapf-pole-lcr wow fadeInUp" data-wow-delay="1.5s" data-wow-offset="200">
				     <div id="six-paragrapf-pole-left-top" class="six-paragrapf-pole-lcr-top">
				         <img class="six-paragrapf-pole-lcr-top-img" src="./img/zasnovnik-sayta.jpg" alt="img"/>
				     </div>
					 <div id="six-paragrapf-pole-left-bottom" class="six-paragrapf-pole-lcr-bottom">
				         <p class="six-paragrapf-pole-lcr-bottom-text">Как засновник и один из создателей<em> A Leo Planet</em> искрене благодарен всем кто участвовал в создании сайта и студии в целом, пользуясь возможностю оставить первый отзыв заявляю что именно наш сайт есть показателем мастерства и уровня нашей работы </p>
				     </div>
				 </div>
			 </div>
		 </div>
		   
    </div>
	
</div>	
	
	
	
	<div id="podval">
	   <div class="podval-animation">
	         <img class="lion-animation-podval" title="animazy" src="./img/lion-animation.gif" alt="lion-animation"/>
	   </div>
	   <div class="podval-context">	   
	       <div class="podval-top">
		     <div class="podval-top-left">
			     <div class="podval-top-left-top">
				     <div class="podval-top-left-top-logo">
					     <div class="podval-top-left-top-logo-left">
						     <img class="podval-top-left-top-logo-left-png" src="./img/podval-logo.png" alt="img">
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
					       <a href=""><img class="footer-menu-center-png" src="./img/logo-lion-png.png" alt="img" onclick="javascript:$(window).scrollTop(0)"/></a>
					 </div>
					 <div class="footer-menu-right">
                         <ul class="footer-menu-right-ul">
							     <li class="footer-menu-right-ul-li"><a class="footer-menu-left-ul-li-a" target="_self" href="about"><p class="footer-menu-left-ul-li-a-cnopka footer-menu-left-ul-li-a-cnopka-onas">О нас</p></a></li>
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
 