<div class="col-xl-4 d-flex">
    <div class="card chat-box">
        <div class="chat-widgets">
            <div class="chat-user-group d-flex align-items-center">
                <div class="img-users call-user">
                    <img src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg') }}" alt="img">
                </div>
                <div class="chat-users user-main">
                    <div class="user-titles user-head-compse">
                        <h5> William Stephin </h5>
                        <div class="chat-user-time">
                            <p>10:22 AM</p>
                        </div>
                    </div>
                    <div class="drop-item chat-menu user-dot-list">
                        <a href="javascript:;" data-bs-toggle="dropdown" aria-expanded="false" class="">
                            <i class="feather-more-vertical"></i>
                        </a>
                        <div class="dropdown-menu" style="">
                            <a class="dropdown-item" href="javascript:;"><i
                                    class="feather-user me-2 text-primary"></i> Profile</a>
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
            <div class="compose-mail">
                <a href="{{ url('compose') }}" class="btn btn-primary"><img
                        src="{{ URL::asset('/assets/img/icons/edit-2.svg') }}" class="me-2"
                        alt="img">Compose Mail</a>
            </div>
            <div class="email-menu-blk">
                <ul>
                    <li class="active"><a href="javascript:;"><img
                                src="{{ URL::asset('/assets/img/icons/inbox.svg') }}" class="me-2"
                                alt="img">Inbox<span class="comman-flex">50</span></a></li>
                    <li><a href="javascript:;"><img src="{{ URL::asset('/assets/img/icons/sent.svg') }}"
                                class="me-2" alt="img">Sent <span class="comman-flex">120</span></a>
                    </li>
                    <li><a href="javascript:;"><img src="{{ URL::asset('/assets/img/icons/draft.svg') }}"
                                class="me-2" alt="img">Draft <span class="comman-flex">20</span></a>
                    </li>
                    <li><a href="javascript:;"><img src="{{ URL::asset('/assets/img/icons/star.svg') }}"
                                class="me-2" alt="img">Starred <span
                                class="comman-flex">05</span></a></li>
                    <li><a href="javascript:;"><img src="{{ URL::asset('/assets/img/icons/trash.svg') }}"
                                class="me-2" alt="img">Trash <span class="comman-flex">12</span></a>
                    </li>
                </ul>
            </div>
            <div class="label-blk comman-space-flex">
                <h4>Labels</h4>
                <ul class="nav label-add-list">
                    <li><a href="javascript:;" class="add-list-btn me-2"><i class="feather-plus "></i></a>
                    </li>
                    <li>
                        <a href="javascript:;" data-bs-toggle="dropdown" aria-expanded="false"
                            class="add-list-btn">
                            <i class="feather-more-vertical"></i>
                        </a>
                        <div class="dropdown-menu" style="">
                            <a class="dropdown-item" href="javascript:;"><i
                                    class="feather-user me-2 text-primary"></i> Profile</a>
                            <a class="dropdown-item" href="javascript:;"><i
                                    class="feather-plus-circle me-2 text-success"></i> Archive</a>
                            <a class="dropdown-item" href="javascript:;"><i
                                    class="feather-trash-2 me-2 text-danger"></i> Delete</a>
                            <a class="dropdown-item " href="javascript:;"><i
                                    class="feather-slash me-2 text-secondary"></i> Block</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="email-menu-blk">
                <ul>
                    <li><a href="javascript:;"><img
                                src="{{ URL::asset('/assets/img/icons/tag-icon-01.svg') }}" class="me-2"
                                alt="img">Work<span class="comman-flex">50</span></a></li>
                    <li><a href="javascript:;"><img
                                src="{{ URL::asset('/assets/img/icons/tag-icon-02.svg') }}" class="me-2"
                                alt="img">Personal <span class="comman-flex">120</span></a></li>
                    <li><a href="javascript:;"><img
                                src="{{ URL::asset('/assets/img/icons/tag-icon-03.svg') }}"
                                class="me-2" alt="img">Read Later <span
                                class="comman-flex">20</span></a></li>
                </ul>
            </div>
            <div class="label-blk comman-space-flex">
                <h4>Folders</h4>
                <ul class="nav label-add-list ">
                    <li><a href="javascript:;" class="add-list-btn me-2"><i
                                class="feather-plus "></i></a></li>
                    <li>
                        <a href="javascript:;" data-bs-toggle="dropdown" aria-expanded="false"
                            class="add-list-btn">
                            <i class="feather-more-vertical"></i>
                        </a>
                        <div class="dropdown-menu" style="">
                            <a class="dropdown-item" href="javascript:;"><i
                                    class="feather-user me-2 text-primary"></i> Profile</a>
                            <a class="dropdown-item" href="javascript:;"><i
                                    class="feather-plus-circle me-2 text-success"></i> Archive</a>
                            <a class="dropdown-item" href="javascript:;"><i
                                    class="feather-trash-2 me-2 text-danger"></i> Delete</a>
                            <a class="dropdown-item " href="javascript:;"><i
                                    class="feather-slash me-2 text-secondary"></i> Block</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="email-menu-blk">
                <ul class="mb-0">
                    <li><a href="javascript:;"><img
                                src="{{ URL::asset('/assets/img/icons/folder-icon-01.svg') }}"
                                class="me-2" alt="img">Personal<span
                                class="comman-flex">50</span></a></li>
                    <li><a href="javascript:;"><img
                                src="{{ URL::asset('/assets/img/icons/folder-icon-02.svg') }}"
                                class="me-2" alt="img">Office <span
                                class="comman-flex">120</span></a></li>
                    <li><a href="javascript:;"><img
                                src="{{ URL::asset('/assets/img/icons/folder-icon-03.svg') }}"
                                class="me-2" alt="img">Bills <span
                                class="comman-flex">20</span></a></li>
                    <li><a href="javascript:;"><img
                                src="{{ URL::asset('/assets/img/icons/folder-icon-04.svg') }}"
                                class="me-2" alt="img">Medical <span
                                class="comman-flex">20</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>