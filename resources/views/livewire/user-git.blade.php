<div>
    <div class="search-box">
        <input class="search-txt" type="text" name="" wire:model="searchGit"
            onfocus="this.selectionStart = this.selectionEnd = this.value.length;" autofocus="true"
            placeholder="{{$placeholder}}">
        <a class="search-btn" wire:click="searchGitAction"> <i class="fa fa-search" aria-hidden="true"></i>
        </a>

    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
   

    @if (count($userGit) > 0)
        <div class="cardP" id="cardd">

            <div class="imgBx">
                <img src='{{ $userGit['avatar_url'] }}' alt="">
            </div>
            <div class="content">
                <div class="details">
                    <h2> {{ $userGit['login'] }}<br><span>Perfil GitHub</span></h2>
                    <div class="data">
                        <h3>Total <br><span>Projetos {{ $userGit['total'] }}</span></h3>
                        <h3>Linguagem<br><span> {{ $userGit['language'] }}</span></h3>
                        <h3>Descrição<br><span href="{{ $userGit['html_url1'] }}">
                                {{ substr($userGit['description'], 0, 10) }}...</span></h3>



                    </div>
                    <div class="actionBtn">
                        <button type="button" class="btn btn-primary" href="{{ $userGit['html_url'] }}"> Acessar
                            Git</button>
                        <button wire:click="limparPesquisa"> Fechar</button>
                        <button><img
                                src="https://samory.sistemasresponsivos.com.br/wp-content/uploads/2020/08/Octocat.png"
                                alt="" width="20px" height="20px"> </button>

                    </div>


                </div>

            </div>



        </div>
        <div class="btnn">
            <button type="button" class="btn btn-primary" id="fora" data-toggle="modal"
                data-target="#ExemploModalCentralizado">
                Ver Detalhes
            </button>



        </div>



        <!-- Modal -->
        <div wire:ignore.self class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog"
            aria-labelledby="TituloModalCentralizado" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="TituloModalCentralizado">Detalhes do Repositório
                            -<span>{{ $userGit['login'] }}</span>

                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="navbar-form " role="search">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="impv" wire:model="searchProject"
                                        placeholder="Busque por algum projeto...">

                                </div>
                                <br>






                                @if (isset($userProjectGit) and !empty($userProjectGit['items']))
                                    <h6>Total de projetos encontrados <span
                                            class="badge badge-success">{{ $userProjectGit['total'] }}</span></h6>

                                    <br>
                                    <br>
                                    <ul class="list-group">
                                        @foreach ($userProjectGit['items'] as $value)
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center">

                                                @if (isset($value['description']) and $value['description'] != 'null')
                                                    {{ substr($value['description'], 0, 20) }}...
                                                @endif
                                                @if (isset($value['description']) and $value['description'] != 'null')
                                                    <span
                                                        class="badge badge-pill badge-info">{{ substr($value['created_at'], 0, 4) }}
                                                    </span>
                                                @endif
                                                @if (isset($value['description']) and $value['description'] != 'null')
                                                    <span
                                                        class="badge badge-primary badge-pill">{{ $value['language'] }}
                                                    </span>
                                                @endif



                                            </li>
                                        @endforeach

                                    </ul>

                                @endif

                            </div>


                        </form>

                    </div>

                </div>
            </div>
        </div>
    @endif

    <script></script>


</div>
