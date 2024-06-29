<div class="col-xl-8">
    <div class="card chat-box ">
        <div class=" chat-search-group ">
            <div class="chat-user-group clinic-user mb-0 d-flex align-items-center">
                <div class="img-users call-user">
                    <a href="{{ url('profile') }}"><img
                            src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg') }}"
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
                <ul class="call-list-add">
                    <li><a href="javascript:;"><img
                                src="{{ URL::asset('/assets/img/icons/profile-user.svg') }}"
                                alt="img">32</a></li>
                    <li><a href="javascript:;"><img src="{{ URL::asset('/assets/img/icons/plus.svg') }}"
                                alt="img"></a>
                    </li>
                </ul>
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
    <div class="card chat-box ">
        <!-- Join Call -->
        <div class="page-content">
            <div class="meeting">
                <div class="meeting-wrapper">
                    <div class="meeting-list">
                        <!-- Horizontal View -->
                        <div class="join-contents horizontal-view fade-whiteboard">
                            <div class="join-video user-active">
                                <img src="{{ URL::asset('/assets/img/call.jpg') }}"
                                    class="img-fluid call-imgs" alt="Logo">
                                <div class="video-avatar">
                                    <div class="text-avatar">
                                        <div class="text-box">
                                            S
                                        </div>
                                    </div>
                                </div>
                                <div class="part-name">
                                    <h4><img src="{{ URL::asset('/assets/img/icons/video-icon-03.svg') }}"
                                            class="me-2" alt="img">Laura Strattenberg</h4>
                                </div>
                                <div class="more-icon">
                                    <a href="javascript:;" class="handraise-on me-2">
                                        <i class="fas fa-thumbtack"></i>
                                    </a>
                                    <a href="javascript:;" class="mic-off">
                                        <i class="feather-mic-off"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="join-video single-user">
                                <img src="{{ URL::asset('/assets/img/call-01.jpg') }}"
                                    class="img-fluid call-imgs" alt="Logo">
                                <div class="part-name">
                                    <h4><img src="{{ URL::asset('/assets/img/icons/video-icon-03.svg') }}"
                                            class="me-2" alt="img">Stephen Williams</h4>
                                </div>
                                <div class="more-icon">
                                    <a href="javascript:;">
                                        <i class="feather-mic-off"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="join-video single-user">
                                <img src="{{ URL::asset('/assets/img/call-02.jpg') }}"
                                    class="img-fluid call-imgs" alt="Logo">
                                <div class="part-name">
                                    <h4><img src="{{ URL::asset('/assets/img/icons/video-icon-03.svg') }}"
                                            class="me-2" alt="img">Galaviz Lalema</h4>
                                </div>
                                <div class="more-icon">
                                    <a href="javascript:;">
                                        <i class="feather-mic-off"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="join-video single-user">
                                <img src="{{ URL::asset('/assets/img/call-03.jpg') }}"
                                    class="img-fluid call-imgs" alt="Logo">
                                <div class="part-name">
                                    <h4><img src="{{ URL::asset('/assets/img/icons/video-icon-03.svg') }}"
                                            class="me-2" alt="img">Smith Bruklin</h4>
                                </div>
                                <div class="more-icon">
                                    <a href="javascript:;">
                                        <i class="feather-mic-off"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /Horizontal View -->

                    </div>
                    <!-- Meet Footer -->
                    <div class="meet-footer">
                        <div class="meet-icons">
                            <div class="met-icons">
                                <ul class="meet-items">
                                    <li class="meet-item">
                                        <a href="javascript:;" class="mute-bt">
                                            <img src="{{ URL::asset('/assets/img/icons/call-icon-03.svg') }}"
                                                alt="img">
                                        </a>
                                    </li>
                                    <li class="meet-item">
                                        <a href="javascript:;" class="mute-video">
                                            <i class="feather-video"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="end-call-chat">
                                <a href="javascript:;" class="btn btn-primary">End Call</a>
                            </div>
                            <div class="end-calls">
                                <ul class="meet-items">
                                    <li class="meet-item">
                                        <a href="javascript:;" class="hand-raise">
                                            <img src="{{ URL::asset('/assets/img/icons/call-icon-01.svg') }}"
                                                alt="img">
                                        </a>
                                    </li>
                                    <li class="meet-item">
                                        <a href="javascript:;" class="showInviteList">
                                            <img src="{{ URL::asset('/assets/img/icons/call-icon-02.svg') }}"
                                                alt="img">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Meet Footer -->
                </div>
            </div>
        </div>
        <!-- /Join Call -->
    </div>
    <!-- /Chat -->
</div>