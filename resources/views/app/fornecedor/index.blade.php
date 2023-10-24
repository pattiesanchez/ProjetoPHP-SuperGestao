<h3>Fornecedor</h3>

@php
   /* if(isset($variavel)){ retornar true se a variavel estiver definida 

    } 
    */
@endphp

@isset($fornecedores)
    @forelse ( $fornecedores as $indice => $fornecedor)
        
        Fornecedor: {{ $fornecedor ['nome'] }}
        <br>
        Status: {{ $fornecedor ['status'] }}
        <br>
        CNPJ: {{ $fornecedor ['cnpj'] ?? 'Dado nao preenchido' }}
        <br>
        Telefone: ({{ $fornecedor ['ddd'] ?? ''}}) {{ $fornecedor ['telefone'] ?? ''}}
        <hr>
    @empty
        Não existem fornecedores cadastrados!
    @endforelse
 @endisset
