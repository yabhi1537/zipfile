<div class="col-xl-8">
    <div class="card chat-box ">
        <div class=" chat-search-group ">
            <div class="chat-user-group mb-0 d-flex align-items-center">
                <div class="img-users call-user">
                    <a href="{{ url('profile') }}"><img
                            src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg') }}"
                            alt="img"></a>
                    <span class="active-users bg-info"></span>
                </div>
                <div class="chat-users">
                    <div class="user-titles">
                        <h5> Forest Kroch</h5>
                    </div>
                    <div class="user-text">
                        <p>Lorem ipsum dolor sit amet...</p>
                    </div>
                </div>
            </div>
            <div class="chat-search-list">
                <ul>
                    <li><a href="{{ url('video-call') }}"><img
                                src="{{ URL::asset('/assets/img/icons/chat-icon-01.svg') }}"
                                alt="img"></a></li>
                    <li><a href="{{ url('voice-call') }}"><img
                                src="{{ URL::asset('/assets/img/icons/chat-icon-02.svg') }}"
                                alt="img"></a></li>
                    <li><a href="javascript:;"><img
                                src="{{ URL::asset('/assets/img/icons/chat-icon-03.svg') }}"
                                alt="img"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Chat -->
    <div class="card chat-message-box">
        <div class="card-body p-0">
            <div class="chat-body">
                <ul class="list-unstyled chat-message">
                    <li class="media d-flex received">
                        <div class="avatar flex-shrink-0">
                            <img src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg') }}"
                                alt="User Image" class="avatar-img rounded-circle">
                        </div>
                        <div class="media-body flex-grow-1">
                            <div class="msg-box">
                                <div class="message-sub-box">
                                    <h4>Williams Bruk</h4>
                                    <p>How likely are you to recommend our company to your friends and
                                        family ?</p>
                                    <span>06:00 PM, 30 Sep 2023</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="media d-flex sent">
                        <div class="media-body flex-grow-1">
                            <div class="msg-box">
                                <div class="message-sub-box">
                                    <p>How likely are you to recommend our company to your friends and
                                        family ?</p>
                                    <span>06:00 PM, 30 Sep 2023</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="media d-flex received">
                        <div class="avatar flex-shrink-0">
                            <img src="{{ URL::asset('/assets/img/profiles/avatar-03.jpg') }}"
                                alt="User Image" class="avatar-img rounded-circle">
                        </div>
                        <div class="media-body flex-grow-1">
                            <div class="msg-box">
                                <div class="message-sub-box">
                                    <h4>Galaviz Lalema</h4>
                                    <p>non tellus dignissim </p>
                                    <ul class="msg-sub-list">
                                        <li><img src="{{ URL::asset('/assets/img/icons/chat-icon-04.svg') }}"
                                                alt="" class="me-1">Explainer Video.avi<span
                                                class="ms-1">30.0 MB</span><img
                                                src="{{ URL::asset('/assets/img/icons/chat-icon-07.svg') }}"
                                                alt="" class="ms-1 ms-auto"></li>
                                        <li><img src="{{ URL::asset('/assets/img/icons/chat-icon-05.svg') }}"
                                                alt="" class="me-1">Ayush Therapy.mp3<span
                                                class="ms-1">4.0 MB</span><img
                                                src="{{ URL::asset('/assets/img/icons/chat-icon-08.svg') }}"
                                                alt="" class="ms-1 ms-auto"></li>
                                        <li><img src="{{ URL::asset('/assets/img/icons/chat-icon-06.svg') }}"
                                                alt="" class="me-1">The liver.img<span
                                                class="ms-1">520KB</span></li>
                                    </ul>
                                    <span>06:32 PM Yesterday</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="media d-flex sent">
                        <div class="media-body flex-grow-1">
                            <div class="msg-box">
                                <div class="message-sub-box">
                                    <p>Vivamus sed dictum dictum ligula, cursus blandit risus</p>
                                    <p class="mb-0">Vivamus sed dictum</p>
                                    <span>06:50PM Today</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="media d-flex received">
                        <div class="avatar flex-shrink-0">
                            <img src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg') }}"
                                alt="User Image" class="avatar-img rounded-circle">
                        </div>
                        <div class="media-body flex-grow-1">
                            <div class="msg-box">
                                <div class="message-sub-box">
                                    <h4>William Stephin</h4>
                                    <p>aliquam ut a ex</p>
                                    <span>5min Ago</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="chat-footer-box">
                <div class="discussion-sent">
                    <div class="row gx-2">
                        <div class="col-lg-12 ">
                            <div class="footer-discussion">
                                <div class="inputgroups">
                                    <input type="text" placeholder="Type your Message here...">
                                    <div class="micro-text position-icon">
                                        <img src="{{ URL::asset('/assets/img/icons/chat-foot-icon-04.svg') }}"
                                            alt="">
                                    </div>
                                    <div class="send-chat position-icon comman-flex">
                                        <a href="javascript:;"><img
                                                src="{{ URL::asset('/assets/img/icons/chat-foot-icon-03.svg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="symple-text position-icon">
                                        <ul>
                                            <li><a href="javascript:;"><img
                                                        src="{{ URL::asset('/assets/img/icons/chat-foot-icon-01.svg') }}"
                                                        class="me-2" alt=""></a></li>
                                            <li><a href="javascript:;"><img
                                                        src="{{ URL::asset('/assets/img/icons/chat-foot-icon-02.svg') }}"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Chat -->
</div>