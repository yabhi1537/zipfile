<div class="col-xl-4 d-flex">
    <div class="card chat-box-clinic ">
        <div class="chat-widgets">
            <div class="chat-user-group-head d-flex align-items-center">
                <div class="img-users call-user">
                    <a href="{{ url('profile') }}"><img src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg') }}"
                            alt="img"></a>
                    <span class="active-users"></span>
                </div>
                <div class="chat-users user-main">
                    <div class="user-titles">
                        <h5> William Stephin </h5>
                        <div class="chat-user-time">
                            <p>Doctor</p>
                        </div>
                    </div>
                    <div class="drop-item chat-menu user-dot-list">
                        <a href="javascript:;" data-bs-toggle="dropdown" aria-expanded="false" class="">
                            <i class="feather-more-vertical"></i>
                        </a>
                        <div class="dropdown-menu" style="">
                            <a class="dropdown-item" href="javascript:;"><i class="feather-user me-2 text-primary"></i>
                                Profile</a>
                            <a class="dropdown-item" href="javascript:;"><i
                                    class="feather-plus-circle me-2 text-success"></i> Archive</a>
                            <a class="dropdown-item" href="javascript:;"><i
                                    class="feather-trash-2 me-2 text-danger"></i> Delete</a>
                            <a class="dropdown-item " href="javascript:;"><i
                                    class="feather-slash me-2 text-secondary"></i> Block</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-liv-search top-chat-search">
                <form action="javascript:;">
                    <div class="chat-search">
                        <div class="form-group me-2 mb-0">
                            <input type="text" class="form-control" placeholder="Search here">
                            <a class="btn"><img src="{{ URL::asset('/assets/img/icons/search-normal.svg') }}"
                                    alt=""></a>
                        </div>
                        <div class="add-search">
                            <a href="javascript:;"><i class="feather-plus"></i></a>
                        </div>
                    </div>
                </form>
            </div>
            @php
                $json = file_get_contents(public_path('../public/assets/json/chat.json'));
                $chats = json_decode($json, true);
            @endphp
            @foreach ($chats as $chat)
                <div class="chat-user-group d-flex align-items-center">
                    <div class="img-users call-user">
                        <a href="{{ url('profile') }}"><img
                                src="{{ URL::asset('/assets/img/profiles/' . $chat['Image']) }}" alt="img"></a>
                        @if (
                            $chat['Name'] === 'Mark Hay Smith' ||
                                $chat['Name'] === 'Harald Kowalski' ||
                                $chat['Name'] === 'Regina Dickerson' ||
                                $chat['Image'] === 'avatar-03.jpg')
                            <span class="active-users"></span>
                        @else
                            <span class="active-users bg-info"></span>
                        @endif
                    </div>
                    <div class="chat-users">
                        <div class="user-titles d-flex">
                            <h5> {{ $chat['Name'] }} </h5>
                            <div class="chat-user-time">
                                <p>{{ $chat['Time'] }}</p>
                            </div>
                        </div>
                        <div class="user-text d-flex">
                            @if ($chat['Name'] === 'Mark Hay Smith' || $chat['Name'] === 'Bernardo James' || $chat['Name'] === 'Regina Dickerson')
                                <p>{{ $chat['Message'] }}</p>
                            @else
                                <p>{{ $chat['Message'] }}</p>
                                <div class="chat-user-count">
                                    <span>{{ $chat['Count'] }}</span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
