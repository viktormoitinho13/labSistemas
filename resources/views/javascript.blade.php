    </div> <!-- Fim da div de conteúdo --> 
</div> <!-- Fim do wrapper; -->

<script>
        document.querySelector('.btn-cadastro-usuario').addEventListener('click', function(){
           document.querySelector('.form-produto').setAttribute('style', 'display:none');
           document.querySelector('.secao-pesquisa').setAttribute('style', 'display:none');
           document.querySelector('.form-fabricante').setAttribute('style', 'display:none');
           document.querySelector('.form-loja').setAttribute('style', 'display:none');
           document.querySelector('.form-usuario').setAttribute('style', 'display:block');
        });

        document.querySelector('.btn-cadastro-produto').addEventListener('click', function(){
           document.querySelector('.form-usuario').setAttribute('style', 'display:none');
           document.querySelector('.secao-pesquisa').setAttribute('style', 'display:none');
           document.querySelector('.form-fabricante').setAttribute('style', 'display:none');
           document.querySelector('.form-loja').setAttribute('style', 'display:none');
           document.querySelector('.form-produto').setAttribute('style', 'display:block');
        });

        document.querySelector('.btn-consulta-produto').addEventListener('click', function(){
           document.querySelector('.form-usuario').setAttribute('style', 'display:none');
           document.querySelector('.form-produto').setAttribute('style', 'display:none');
           document.querySelector('.form-fabricante').setAttribute('style', 'display:none');
           document.querySelector('.form-loja').setAttribute('style', 'display:none');
           document.querySelector('.secao-pesquisa').setAttribute('style', 'display:block');
        });

        document.querySelector('.btn-cadastro-fabricante').addEventListener('click', function(){
           document.querySelector('.form-usuario').setAttribute('style', 'display:none');
           document.querySelector('.form-produto').setAttribute('style', 'display:none');
           document.querySelector('.secao-pesquisa').setAttribute('style', 'display:none');
           document.querySelector('.form-loja').setAttribute('style', 'display:none');
           document.querySelector('.form-fabricante').setAttribute('style', 'display:block');
        });

        document.querySelector('.btn-cadastro-loja').addEventListener('click', function(){
           document.querySelector('.form-usuario').setAttribute('style', 'display:none');
           document.querySelector('.form-produto').setAttribute('style', 'display:none');
           document.querySelector('.secao-pesquisa').setAttribute('style', 'display:none');
           document.querySelector('.form-fabricante').setAttribute('style', 'display:none');
           document.querySelector('.form-loja').setAttribute('style', 'display:block');
        });

        document.querySelector('.input-fabricacao').addEventListener("focusout", function(){
            this.type = 'text';
            this.placeholder = 'Data de Fabricação';
        });
        document.querySelector('.input-validade').addEventListener("focusout", function(){
            this.type = 'text';
            this.placeholder = 'Data de Validade';
        });

        $(document).ready(function() {
            $("#cargo").formSelect();
        });
    </script>