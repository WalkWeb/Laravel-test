        <div class="content-section" id="services">
            <div class="container">
                <div class="row">
                    <div class="heading-section col-md-12 text-center">
                        <h2>Сервис</h2>
                        <p>Наши компетенции</p>
                    </div>
                </div>
                <div class="row">
                    @foreach($servises as $servise)
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item" id="service-1">
                                <div class="service-icon">
                                    <i class="{{ $servise['icon'] }}"></i>
                                </div>
                                <div class="service-content">
                                    <div class="inner-service">
                                       <h3>{{ $servise['name'] }}</h3>
                                       <p>{{ $servise['description'] }}</p> 
                                       <p><a href="/page/{{ $servise['id'] }}" title="">Подробнее »</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        
        <div class="content-section" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="heading-section col-md-12 text-center">
                        <h2>Портфолио</h2>
                        <p>Последние работы</p>
                    </div>
                </div>
                <div class="row">
                    @foreach($portfolios as $portfolio)
                        <div class="portfolio-item col-md-3 col-sm-6">
                            <div class="portfolio-thumb">
                                <img src="{{ $portfolio['imagesmall'] }}" alt="">
                                <div class="portfolio-overlay">
                                    <h3>{{ $portfolio['name'] }}</h3>
                                    <p>{{ $portfolio['description'] }}</p>
                                    <a href="{{ $portfolio['imagebig'] }}" data-rel="lightbox" class="expand">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="content-section" id="our-team">
            <div class="container">
                <div class="row">
                    <div class="heading-section col-md-12 text-center">
                        <h2>Команда</h2>
                        <p>Лучшие специалисты своих областей</p>
                    </div>
                </div>
                <div class="row">
                    @foreach($teams as $team)
                        <div class="team-member col-md-3 col-sm-6">
                            <div class="member-thumb">
                                <img src="{{ $team['foto'] }}" alt="">
                                <div class="team-overlay">
                                    <h3>{{ $team['name'] }}</h3>
                                    <span>{{ $team['position'] }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="skills-heading">
                            <h3 class="skills-title">Работая с нами</h3>
                            <p class="small-text">Ваш бренд становится более узнаваем, увеличиваются продажи</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-sm-6">
                        <p><b>Идеальный внешний вид</b><br />
                        У всех наших проектов уникальный и удобный дизайн, над которым работает наш дизайнер с опытом в сфере ui/ux.<br /><br />
                        
                        <b>Заметность и клиенты</b><br />
                        SEO продвижение, реклама, группы в социальных сетях и все это для вас.<br /><br />
                        
                        <b>Удобство и мобильность</b><br />
                        Все наши сайты смотрятся классно как на компьютерах, так и на мобильных устройствах, а наши программы работают за вас.<br /><br />
                        
                        <b>Надежное место</b><br />
                        Мы предоставляем услуги хостинга и внимательно следим за сайтами наших клиентов.<br /><br />
						</p>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <ul class="progess-bars">
                            <li>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">Рост продаж 90%</div>
                                </div>
                            </li>
                            <li>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">Рост доверия клиентов 75%</div>
                                </div>
                            </li>
                            <li>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;">Покупки чаще на 68%</div>
                                </div>
                            </li>
                            <li>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">Узнаваемость бренда на 95%</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section" id="contact">
            <div class="container">
                <div class="row">
                    <div class="heading-section col-md-12 text-center">
                        <h2>Контакты</h2>
                        <p>Свяжитесь с нами удобным Вам способом</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7 col-sm-6">
                        <ul class="contact-info">
                            <li>Телефон: +380 (50) 986-21-21</li>
                            <li>Email: <a href="mailto:info@company.com">info@company.com</a></li>
                            <li>Адрес: Москва, пр. Мира 8, офис 777</li>
                        </ul>
                        <br><br>
                    </div>
                    <div class="col-md-5 col-sm-6">
                        <div class="contact-form">
                            <form action="{{ route('home') }}" method="post">
                                <p><input name="name" type="text" id="name" placeholder="Ваше Имя"></p>
                                <p><input name="email" type="text" id="email" placeholder="Ваш Email"></p>
                                <p><textarea name="text" id="comments" placeholder="Сообщение"></textarea></p>
                                <input type="submit" class="mainBtn" id="submit" value="Отправить сообщение">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>