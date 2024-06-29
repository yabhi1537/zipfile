<div class="col-xl-8">
    <div class="card chat-box ">
        <div class=" chat-search-group ">
            <div class="chat-user-group mb-0 d-flex align-items-center">
                <div class="img-users call-user">
                    <a href="{{ url('profile') }}"><img
                            src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg') }}"
                            alt="img"></a>
                </div>
                <div class="chat-users">
                    <div class="user-titles">
                        <h5> Forest Kroch</h5>
                    </div>
                    <div class="user-text">
                        <p>Doctor</p>
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
    <div class="card chat-box  mb-0">
        <div class="voice-call-blk text-center">
            <div class="voice-call-user">
                <img src="{{ URL::asset('/assets/img/profiles/avatar-03.jpg') }}" alt="img">
                <h3>Bernardo James</h3>
                <p>Doctor</p>
            </div>
            <div class="voice-time">
                <h3><img src="{{ URL::asset('/assets/img/icons/clock.svg') }}" class="me-2"
                        alt="img"> 00:10:10</h3>
            </div>
            <div class="voice-menu">
                <ul>
                    <li><a href="javascript:;"><img
                                src="{{ URL::asset('/assets/img/icons/voice-icon-01.svg') }}"
                                alt="img"></a></li>
                    <li class="active"><a href="javascript:;"><img
                                src="{{ URL::asset('/assets/img/icons/voice-icon-02.svg') }}"
                                alt="img"></a></li>
                    <li><a href="javascript:;"><img
                                src="{{ URL::asset('/assets/img/icons/voice-icon-03.svg') }}"
                                alt="img"></a></li>
                </ul>
            </div>
            <div class="end-call-voice">
                <a href="javascript:;" class="btn btn-primary">End Call</a>
            </div>
        </div>
    </div>
    <!-- /Chat -->
</div>