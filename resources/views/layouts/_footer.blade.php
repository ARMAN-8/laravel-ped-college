<div class="card footer mt-4 mb-4 pb-2" style="border-radius: 10px; background-color: #9CBAC8;">
    <div class="row">
        <div class="col-sm-6">
            <div class="card-body">
                <!--Google map-->
                <div id="map-container-google-1" class="z-depth-1-half map-container"
                     style="height: 277px; border-radius: 10px;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2903.68043782048!2d76.96282191544799!3d43.30001347913495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836db2c8a1a3f9%3A0x5a6fd20dc1f79081!2z0J_QtdC00LDQs9C-0LPQuNGH0LXRgdC60LjQuSDQutC-0LvQu9C10LTQtg!5e0!3m2!1sru!2skz!4v1578221004728!5m2!1sru!2skz"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                <!--Google Maps-->
            </div>
        </div>
        <div class="col-sm-3 mt-3">
            <div>
                <b>
                    {{__('messages.Kazakhstan')}}, {{__('messages.almaty_city')}}
                </b>
                <p>{{__('messages.college_street')}}</p>
                <b>{{__('messages.reception')}}</b>
                <p>2-78-56-84, 2-90-87-44</p>
                <b>
                    e-mail:
                </b>
                <a class="links" href="#">
                    pedkol1@inbox.ru
                </a>
                <a class="links" href="#">
                    http://ped1.kazobr.kz
                </a>
                <hr/>
                <b>{{__('messages.helpline')}}
                </b>
                <p>
                    2-78-56-84, 2-90-87-44
                </p>
            </div>
        </div>
        <div class="col-sm-3 mt-3">
            <div>
                <a class="links font-weight-bold" href="{{ url('/') }}"><i class="fas fa-home"></i> {{__('messages.HOME')}}</a>
                <div class="mt-3">
                    <ul class="links-footer">
                        <li class="links-li"><a class="links" href="{{ url('president/message') }}">{{__('messages.pre_mes')}}</a></li>
                        <li class="links-li"><a class="links" href="{{ url('spiritual_revivals') }}">{{__('messages.state_symbols')}}</a></li>
                        <li class="links-li"><a class="links" href="{{ url('/') }}">{{__('messages.NEWS')}}</a></li>
                        {{--<li class="links-li"><a class="links" href="#">Сайт картасы</a></li>--}}
                        {{--<li class="links-li"><a class="links" href="#">RSS</a></li>--}}
                    </ul>
                    <hr class="ml-4 mr-4"/>
                    <ul class="social-n"> {{--Ссылканы li-дің сыртына қою керек сияқты крч пересмотреть--}}
                        <li class="p-1 mr-2 insta"><a class="m-2" href="https://www.instagram.com/pedkoledzh1/"
                                                      target="_blank"><i
                                    class="fab fa-instagram"></i></a></li>
                        <li class="p-1 mr-2 face"><a class="m-2" href="#" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li class="p-1 mr-2 vk"><a class="m-2" href="#" target="_blank"><i class="fab fa-vk"></i></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
