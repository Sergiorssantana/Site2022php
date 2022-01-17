<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrícula 2022</title>

    <script language="javascript">
            var lista2 = {
                "resultados" : [
                    {"escola" : "Creche Ana Crista", "serie" : [{"nome" : "Berçario", "vagas" : 6},{"nome" : "Infantil 1", "vagas" : 3}, {"nome" : "Infantil 2", "vagas" : 6}, {"nome" : "Infantil 3", "vagas" : 6} ] },
					{"escola" : "Creche Cido Capunga", "serie" : [{"nome" : "Berçario", "vagas" : 6},{"nome" : "Infantil 1", "vagas" : 3}, {"nome" : "Infantil 2", "vagas" : 6}, {"nome" : "Infantil 3", "vagas" : 6}, {"nome" : "Pré I", "vagas" : 6}] },
					{"escola" : "Creche Dom Hélder", "serie" : [{"nome" : "Berçario", "vagas" : 6},{"nome" : "Infantil 1", "vagas" : 3}, {"nome" : "Infantil 2", "vagas" : 6}, {"nome" : "Infantil 3", "vagas" : 6} ] },
					{"escola" : "Creche Irmã Dulce", "serie" : [{"nome" : "Berçario", "vagas" : 6},{"nome" : "Infantil 1", "vagas" : 3}, {"nome" : "Infantil 2", "vagas" : 6}, {"nome" : "Infantil 3", "vagas" : 6}, {"nome" : "Pré I", "vagas" : 6}, {"nome" : "Pré II", "vagas" : 6}] },
					{"escola" : "Creche Madre Maria", "serie" : [{"nome" : "Berçario", "vagas" : 6},{"nome" : "Infantil 1", "vagas" : 3}, {"nome" : "Infantil 2", "vagas" : 6}, {"nome" : "Infantil 3", "vagas" : 6}, {"nome" : "Pré I", "vagas" : 6}, {"nome" : "Pré II", "vagas" : 6}] },
					{"escola" : "Creche Mariana Martins", "serie" : [{"nome" : "Berçario", "vagas" : 6},{"nome" : "Infantil 1", "vagas" : 3}, {"nome" : "Infantil 2", "vagas" : 6}, {"nome" : "Infantil 3", "vagas" : 6}, {"nome" : "Pré I", "vagas" : 6}] },
					{"escola" : "Creche Michele", "serie" : [{"nome" : "Berçario", "vagas" : 6},{"nome" : "Infantil 1", "vagas" : 3}, {"nome" : "Infantil 2", "vagas" : 6}, {"nome" : "Infantil 3", "vagas" : 6}] },
					{"escola" : "Creche Vovô Jason", "serie" : [{"nome" : "Infantil 1", "vagas" : 3}, {"nome" : "Infantil 2", "vagas" : 6}, {"nome" : "Infantil 3", "vagas" : 6}, {"nome" : "Pré I", "vagas" : 6}, {"nome" : "Pré II", "vagas" : 6}] },
					{"escola" : "Jardim de Infancia Pequena Fada", "serie" : [{"nome" : "Infantil 2", "vagas" : 6}, {"nome" : "Infantil 3", "vagas" : 6}, {"nome" : "Pré I", "vagas" : 6}, {"nome" : "Pré II", "vagas" : 6}] },
					{"escola" : "E. M. Abelardo Pereira de Melo", "serie" :[{"nome" : "Infantil 2", "vagas" : 6}, {"nome" : "Infantil 3", "vagas" : 6}, {"nome" : "Pré I", "vagas" : 6}, {"nome" : "Pré II", "vagas" : 6},{"nome" : "1º Ano", "vagas" : 6}, {"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6}, {"nome" : "4º Ano", "vagas" : 6},{"nome" : "5º Ano", "vagas" : 6}] },
					{"escola" : "E. M. Anália Vieira de Figueiredo", "serie" : [{"nome" : "Infantil 2", "vagas" : 6}, {"nome" : "Infantil 3", "vagas" : 6}, {"nome" : "Pré I", "vagas" : 6}, {"nome" : "Pré II", "vagas" : 6},{"nome" : "1º Ano", "vagas" : 6}, {"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6}, {"nome" : "4º Ano", "vagas" : 6},{"nome" : "5º Ano", "vagas" : 6}] },
					{"escola" : "E. M. Apulcro Mota", "serie" : [{"nome" : "Pré I", "vagas" : 6}, {"nome" : "Pré II", "vagas" : 6},{"nome" : "1º Ano", "vagas" : 6}, {"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6}, {"nome" : "4º Ano", "vagas" : 6},{"nome" : "5º Ano", "vagas" : 6},{"nome" : "6º Ano", "vagas" : 6},{"nome" : "7º Ano", "vagas" : 6}, {"nome" : "8º Ano", "vagas" : 6},{"nome" : "9º Ano", "vagas" : 6}, {"nome" : "EJA 1º E 2º Ano", "vagas" : 6},{"nome" : "EJA 2º etapa", "vagas" : 6}, {"nome" : "EJA 3º etapa", "vagas" : 6}, {"nome" : "EJA 4º etapa", "vagas" : 6}] },
					{"escola" : "E. M. Barquinho Amarelo", "serie" :  [{"nome" : "Pré I", "vagas" : 6}, {"nome" : "Pré II", "vagas" : 6}] },
					{"escola" : "E. M. Coronel Gentil Daltro", "serie" : [{"nome" : "Pré II", "vagas" : 6},{"nome" : "1º Ano", "vagas" : 6}, {"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6}, {"nome" : "4º Ano", "vagas" : 6},{"nome" : "5º Ano", "vagas" : 6},{"nome" : "6º Ano", "vagas" : 6},{"nome" : "7º Ano", "vagas" : 6}, {"nome" : "8º Ano", "vagas" : 6},{"nome" : "9º Ano", "vagas" : 6}, {"nome" : "EJA 1º e 2º Ano", "vagas" : 6}] },
					{"escola" : "E. M. Diva Maria Correa", "serie" :  [{"nome" : "Pré II", "vagas" : 6},{"nome" : "1º Ano", "vagas" : 6}, {"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6}, {"nome" : "4º Ano", "vagas" : 6},{"nome" : "5º Ano", "vagas" : 6},{"nome" : "EJA 1º e 2º", "vagas" : 6},{"nome" : "EJA 3º e 4º", "vagas" : 6}, {"nome" : "EJA 3º e 4º", "vagas" : 6}, {"nome" : "EJA 1º etapa", "vagas" : 6}, {"nome" : "EJA 2º etapa", "vagas" : 6}, {"nome" : "EJA 3º etapa", "vagas" : 6},{"nome" : "EJA 4º etapa", "vagas" : 6}] },
					{"escola" : "E. M. Doutor João Garcez Vieira", "serie" : [{"nome" : "1º Ano", "vagas" : 6}, {"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6}, {"nome" : "4º Ano", "vagas" : 6},{"nome" : "5º Ano", "vagas" : 6},{"nome" : "6º Ano", "vagas" : 6},{"nome" : "7º Ano", "vagas" : 6}, {"nome" : "8º Ano", "vagas" : 6},{"nome" : "9º Ano", "vagas" : 6}, {"nome" : "EJA 3º e 4º Ano", "vagas" : 6}, {"nome" : "EJA 1º etapa", "vagas" : 6}, {"nome" : "EJA 2º etapa", "vagas" : 6},{"nome" : "EJA 3º etapa", "vagas" : 6} ] },
					{"escola" : "E. M. Eduardo Viana dos Santos", "serie" :[{"nome" : "Pré I", "vagas" : 6}, {"nome" : "Pré II", "vagas" : 6},{"nome" : "1º Ano", "vagas" : 6}, {"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6}, {"nome" : "4º Ano", "vagas" : 6},{"nome" : "5º Ano", "vagas" : 6} ] },
					{"escola" : "E. M. Izídio Marques de Melo", "serie" : [{"nome" : "Infantil 2", "vagas" : 6}, {"nome" : "Infantil 3", "vagas" : 6}, {"nome" : "Pré I", "vagas" : 6}, {"nome" : "Pré II", "vagas" : 6},{"nome" : "1º Ano", "vagas" : 6}, {"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6}, {"nome" : "4º Ano", "vagas" : 6},{"nome" : "6º Ano", "vagas" : 6}, {"nome" : "7º Ano", "vagas" : 6},{"nome" : "8º Ano", "vagas" : 6}, {"nome" : "9º Ano", "vagas" : 6}] },
					{"escola" : "E. M. João Paulo II", "serie" : [{"nome" : "6º Ano", "vagas" : 6}, {"nome" : "7º Ano", "vagas" : 6},{"nome" : "8º Ano", "vagas" : 6}, {"nome" : "9º Ano", "vagas" : 6}] },
					{"escola" : "E. M. João Vasconcelos Prado", "serie" : [{"nome" : "Pré II", "vagas" : 6},{"nome" : "1º Ano", "vagas" : 6}, {"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6}] },
					{"escola" : "E. M. José do Prado Franco", "serie" : [{"nome" : "6º Ano", "vagas" : 6}, {"nome" : "7º Ano", "vagas" : 6},{"nome" : "8º Ano", "vagas" : 6}, {"nome" : "9º Ano", "vagas" : 6},{"nome" : "EJA 3º e 4º", "vagas" : 6},{"nome" : "EJA 1º etapa", "vagas" : 6}, {"nome" : "EJA 2º etapa", "vagas" : 6}, {"nome" : "EJA 3º etapa", "vagas" : 6}, {"nome" : "EJA 4º etapa", "vagas" : 6}] },
					{"escola" : "E. M. José Ferreira Neto", "serie" : [{"nome" : "Infantil 3", "vagas" : 6}, {"nome" : "Pré I", "vagas" : 6}, {"nome" : "Pré II", "vagas" : 6},{"nome" : "1º Ano", "vagas" : 6}, {"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6}, {"nome" : "4º Ano", "vagas" : 6},{"nome" : "5º Ano", "vagas" : 6}] },
					{"escola" : "E. M. José Teixeira da Cruz", "serie" : [{"nome" : "1º Ano", "vagas" : 6}, {"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6}, {"nome" : "4º Ano", "vagas" : 6},{"nome" : "5º Ano", "vagas" : 6}] },
					{"escola" : "E. M. Josefa de Santana", "serie" : [{"nome" : "Pré I", "vagas" : 6}, {"nome" : "Pré II", "vagas" : 6},{"nome" : "1º Ano", "vagas" : 6}, {"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6}, {"nome" : "4º Ano", "vagas" : 6},{"nome" : "5º Ano", "vagas" : 6}, {"nome" : "EJA 1º e 2º", "vagas" : 6}] },
					{"escola" : "E. M. Leonel Brizola", "serie" : [{"nome" : "Pré I", "vagas" : 6}, {"nome" : "Pré II", "vagas" : 6},{"nome" : "1º Ano", "vagas" : 6}, {"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6}, {"nome" : "4º Ano", "vagas" : 6},{"nome" : "5º Ano", "vagas" : 6}] },
					{"escola" : "E. M. Luana Rollemberg S de Meneses", "serie" : [{"nome" : "Pré I", "vagas" : 6}, {"nome" : "Pré II", "vagas" : 6},{"nome" : "1º Ano", "vagas" : 6}, {"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6}] },
					{"escola" : "E. M. Major João Teles", "serie" : [{"nome" : "Pré I", "vagas" : 6}, {"nome" : "Pré II", "vagas" : 6},{"nome" : "1º Ano", "vagas" : 6}, {"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6}, {"nome" : "4º Ano", "vagas" : 6},{"nome" : "5º Ano", "vagas" : 6},{"nome" : "6º Ano", "vagas" : 6},{"nome" : "7º Ano", "vagas" : 6}, {"nome" : "8º Ano", "vagas" : 6},{"nome" : "9º Ano", "vagas" : 6}] },
					{"escola" : "E. M. Manoel Cunha", "serie" : [ {"nome" : "Pré II", "vagas" : 6},{"nome" : "1º Ano", "vagas" : 6}, {"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6}, {"nome" : "4º Ano", "vagas" : 6},{"nome" : "5º Ano", "vagas" : 6}, {"nome" : "EJA 1º etapa", "vagas" : 6}, {"nome" : "EJA 2º etapa", "vagas" : 6}, {"nome" : "EJA 3º etapa", "vagas" : 6},{"nome" : "EJA 4º etapa", "vagas" : 6} ] },
					{"escola" : "E. M. Manoel de Jesus Silva", "serie" : [{"nome" : "1º Ano", "vagas" : 6}, {"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6}, {"nome" : "4º Ano", "vagas" : 6},{"nome" : "5º Ano", "vagas" : 6}] },
					{"escola" : "E. M. Maria Rizonete Silva", "serie" : [{"nome" : "3º Ano", "vagas" : 6}, {"nome" : "4º Ano", "vagas" : 6},{"nome" : "5º Ano", "vagas" : 6} ] },
					{"escola" : "E. M. Mariana Prado Vasconcelos", "serie" : [{"nome" : "1º Ano", "vagas" : 6}, {"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6}, {"nome" : "4º Ano", "vagas" : 6},{"nome" : "5º Ano", "vagas" : 6},{"nome" : "EJA 1º e 2º ", "vagas" : 6},{"nome" : "EJA 3º e 4º ", "vagas" : 6},{"nome" : "EJA 1º etapa", "vagas" : 6},{"nome" : "EJA 2º etapa", "vagas" : 6},{"nome" : "EJA 3º etapa", "vagas" : 6},{"nome" : "EJA 4º etapa", "vagas" : 6} ] },
					{"escola" : "E. M. Nair Menezes dos Santos", "serie" : [{"nome" : "1º Ano", "vagas" : 6}, {"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6}, {"nome" : "4º Ano", "vagas" : 6},{"nome" : "5º Ano", "vagas" : 6},] },
					{"escola" : "E. M. Nossa Senhora de Lourdes", "serie" : [{"nome" : "Pré I", "vagas" : 6}, {"nome" : "Pré II", "vagas" : 6},{"nome" : "1º Ano", "vagas" : 6}, {"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6}, {"nome" : "4º Ano", "vagas" : 6},{"nome" : "5º Ano", "vagas" : 6}] },
					{"escola" : "E. M. Nossa Senhora do Socorro", "serie" : [{"nome" : "Pré I", "vagas" : 6}, {"nome" : "Pré II", "vagas" : 6},{"nome" : "1º Ano", "vagas" : 6}, {"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6}] },
					{"escola" : "E. M. Padre Pedro", "serie" : [{"nome" : "Pré I", "vagas" : 6}, {"nome" : "Pré II", "vagas" : 6},{"nome" : "1º Ano", "vagas" : 6}, {"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6}, {"nome" : "4º Ano", "vagas" : 6},{"nome" : "5º Ano", "vagas" : 6} ] },
					{"escola" : "E. M. Pedro Moreira Filho", "serie" : [{"nome" : "Pré I", "vagas" : 6}, {"nome" : "Pré II", "vagas" : 6},{"nome" : "1º Ano", "vagas" : 6}, {"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6}, {"nome" : "4º Ano", "vagas" : 6},{"nome" : "5º Ano", "vagas" : 6} ] },
					{"escola" : "E. M. Professor Acrísio Cruz", "serie" : [{"nome" : "Pré I", "vagas" : 6}, {"nome" : "Pré II", "vagas" : 6},{"nome" : "1º Ano", "vagas" : 6}, {"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6}, {"nome" : "4º Ano", "vagas" : 6},{"nome" : "5º Ano", "vagas" : 6} ] },
					{"escola" : "E. M. Professor Donald", "serie" : [{"nome" : "Pré I", "vagas" : 6}, {"nome" : "Pré II", "vagas" : 6},{"nome" : "1º Ano", "vagas" : 6}, {"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6}, {"nome" : "4º Ano", "vagas" : 6},{"nome" : "5º Ano", "vagas" : 6} ] },
					{"escola" : "E. M. Professora Cristina Amaro", "serie" : [ {"nome" : "Pré II", "vagas" : 6},{"nome" : "1º Ano", "vagas" : 6}, {"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6} ] },
					{"escola" : "E. M. Professora Elisa Teles", "serie" : [{"nome" : "Pré I", "vagas" : 6}, {"nome" : "Pré II", "vagas" : 6},{"nome" : "1º Ano", "vagas" : 6}, {"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6}, {"nome" : "4º Ano", "vagas" : 6},{"nome" : "5º Ano", "vagas" : 6} ] },
					{"escola" : "E. M. Professora Honorina Costa", "serie" : [{"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6}, {"nome" : "4º Ano", "vagas" : 6},{"nome" : "5º Ano", "vagas" : 6},{"nome" : "6º Ano", "vagas" : 6},{"nome" : "7º Ano", "vagas" : 6}, {"nome" : "8º Ano", "vagas" : 6},{"nome" : "9º Ano", "vagas" : 6}] },
					{"escola" : "E. M. Profa. Mª da Conceição Cruz", "serie" : [{"nome" : "Pré I", "vagas" : 6}, {"nome" : "Pré II", "vagas" : 6},{"nome" : "1º Ano", "vagas" : 6}, {"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6}, {"nome" : "4º Ano", "vagas" : 6},{"nome" : "5º Ano", "vagas" : 6} ] },
					{"escola" : "E. M. Profa. Mª São Pedro Vasconcelos", "serie" : [{"nome" : "Infantil 3º", "vagas" : 6},{"nome" : "Pré I", "vagas" : 6}, {"nome" : "Pré II", "vagas" : 6},{"nome" : "1º Ano", "vagas" : 6}, {"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6}, {"nome" : "4º Ano", "vagas" : 6},{"nome" : "5º Ano", "vagas" : 6}] },
					{"escola" : "E. M. Professora Maria Vitória Costa", "serie" : [{"nome" : "Pré I", "vagas" : 6}, {"nome" : "Pré II", "vagas" : 6},{"nome" : "1º Ano", "vagas" : 6}, {"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6}, {"nome" : "4º Ano", "vagas" : 6},{"nome" : "5º Ano", "vagas" : 6} ] },
					{"escola" : "E. M. Professora Neuzice Barreto Li", "serie" : [{"nome" : "6º Ano", "vagas" : 6},{"nome" : "7º Ano", "vagas" : 6}, {"nome" : "8º Ano", "vagas" : 6},{"nome" : "9º Ano", "vagas" : 6}, {"nome" : "EJA 1º e 2º", "vagas" : 6}, {"nome" : "EJA 3º e 4º", "vagas" : 6},{"nome" : "EJA 1º etapa", "vagas" : 6}, {"nome" : "EJA 2º etapa", "vagas" : 6}, {"nome" : "EJA 3º etapa", "vagas" : 6} ] },
					{"escola" : "E. M. Rosalvo Queiros", "serie" : [{"nome" : "Infantil 3", "vagas" : 6},{"nome" : "1º Ano", "vagas" : 6}, {"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6}, {"nome" : "4º Ano", "vagas" : 6},{"nome" : "5º Ano", "vagas" : 6} ] },
					{"escola" : "E. M. Santa Terezinha", "serie" : [{"nome" : "Pré I", "vagas" : 6}, {"nome" : "Pré II", "vagas" : 6},{"nome" : "1º Ano", "vagas" : 6}, {"nome" : "2º Ano", "vagas" : 6},{"nome" : "3º Ano", "vagas" : 6}, {"nome" : "4º Ano", "vagas" : 6},{"nome" : "5º Ano", "vagas" : 6} ] },
                ]
            };

            function preencheEscolas() {
                for (var e in lista2.resultados) { 
                    var select = document.getElementById('escolas');
                    var elemento = document.createElement("option");
                    elemento.textContent = lista2.resultados[e].escola;
                    elemento.value = lista2.resultados[e].escola;
                    select.appendChild(elemento);
                    console.log(lista2.resultados[e].escola); 
                }
                //document.getElementById('escolas')
            }

            function preencheSeries(posicao) {
                removeOptions(document.getElementById('series'));
                var select = document.getElementById('series');

                var elementoVazio = document.createElement("option");
                elementoVazio.textContent = 'Escolha sua série';
                select.appendChild(elementoVazio);

                for (var e in lista2.resultados.find(item => item.escola === posicao).serie) { 
                    var elemento = document.createElement("option");
                    elemento.textContent = lista2.resultados.find(item => item.escola === posicao).serie[e].nome;
                    elemento.value = lista2.resultados.find(item => item.escola === posicao).serie[e].nome;
                    select.appendChild(elemento);

                }
                lista2.resultados.find(item => item.escola === posicao).serie.find(item => item.nome === "primeira serie").vagas
            }

            function preencheQuantidadeVagas(posicao){
                var vagas = lista2.resultados.find(item => item.escola === document.getElementById('escolas').value).serie.find(item2 => item2.nome === posicao).vagas;
                document.getElementById('qtdVagas').value = vagas;
            }

            function removeOptions(selectElement) {
                var i, L = selectElement.options.length - 1;
                for(i = L; i >= 0; i--) {
                    selectElement.remove(i);
                }
            }
  </script>

    <!-- Fonte -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
  <!-- Estilos -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/styles.css">
</head>
<body onload="preencheEscolas();">
    <header>
              <div class="container" id="nav-container">
              <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
              <a class="navbar-brand" href="index.php">
              <img id="logo" src="img/logo3 2.png" alt="Semed"> 
                </a>
     </header>

     <div class="container">
        <form action="processa2.php" method="post" >
            <input type="hidden" name="qtdVagas" id="qtdVagas" />
       	        		
         <h1>Formulário de Matrícula</h1>
         <hr>
        		<h3>Dados Pessoais:</h3>
    
     			<label>Nome:
    			<input type="text" required name="nome" size="40" maxlength="40" id="nome" placeholder="Nome do Aluno"><br>
                 </label>
                 <label>CPF:
                 <input type="text" required name="cpf" size="20" maxlength="40" id="fname" placeholder="CPF">
                 </label>		
         		 <label>Nascimento:
         		 <input type="data" required name="dia" size="1" maxlength="2" id="dia" placeholder="dia">/
         		 <input type="data" required name="mes" size="1" maxlength="2" id="mes" placeholder="mês">/
         		 <input type="data" required name="ano" size="3" maxlength="6" id="ano" placeholder="ano">
         		 </label>
         		 <label> Mãe:
        		 <input type="text" required name="mae" size="40" maxlength="40" id="mae" placeholder="mãe"><br>
                 </label>
     			<label> Pai:
         		<input type="text" required name="pai" size="40" maxlength="40" id="pai" placeholder="pai"><br>
                 </label>
         		<label>Telefone: DDD (
         				<input type="tel" required name="ddd" size="1" maxlength="2" id="ddd"placeholder="DDD">
         				Tel:<input type="tel" required name="telefone" size="12" maxlength="8" id="tel" placeholder="telefone">
         		</label><br>
        			<label>E-mail:
         			<input type="email" required name="email" size="45" maxlength="40" id="email" placeholder="aaa@aaa.com.br" ><br>
                    </label>
         			<br>
                     <hr>
                     <fieldset>
                        <legend>Dados de Endereço</legend>
                        <table cellspacing="10">
                         <tr >
                          <td >
                           <label for="rua">Rua:</label>
                          </td>
                          <td align="left">
                           <input type="text" name="rua" size="35">
                          </td>
                          <td>
                           <label for="numero">Numero:</label>
                          </td>
                          <td align="left">
                           <input type="text" name="numero" size="6">
                          </td>
                         </tr>
                         <tr>
                          <td>
                           <label for="bairro">Bairro: </label>
                          </td>
                          <td align="left">
                           <input type="text" name="bairro" size= "25">
                          </td>
                         </tr>
                         <tr>
                          <td>
                           <label for="estado">Estado:</label>
                          </td>
                          <td align="left">
                           <select name="estado"> 
                           <option value=""></option>
                           <option value="ac">Acre</option> 
                           <option value="al">Alagoas</option> 
                           <option value="am">Amazonas</option> 
                           <option value="ap">Amapá</option> 
                           <option value="ba">Bahia</option> 
                           <option value="ce">Ceará</option> 
                           <option value="df">Distrito Federal</option> 
                           <option value="es">Espírito Santo</option> 
                           <option value="go">Goiás</option> 
                           <option value="ma">Maranhão</option> 
                           <option value="mt">Mato Grosso</option> 
                           <option value="ms">Mato Grosso do Sul</option> 
                           <option value="mg">Minas Gerais</option> 
                           <option value="pa">Pará</option> 
                           <option value="pb">Paraíba</option> 
                           <option value="pr">Paraná</option> 
                           <option value="pe">Pernambuco</option> 
                           <option value="pi">Piauí</option> 
                           <option value="rj">Rio de Janeiro</option> 
                           <option value="rn">Rio Grande do Norte</option> 
                           <option value="ro">Rondônia</option> 
                           <option value="rs">Rio Grande do Sul</option> 
                           <option value="rr">Roraima</option> 
                           <option value="sc">Santa Catarina</option> 
                           <option value="se">Sergipe</option> 
                           <option value="sp">São Paulo</option> 
                           <option value="to">Tocantins</option> 
                          </select>
                          </td>
                         </tr>
                         <tr>
                          <td>
                           <label for="cidade">Cidade: </label>
                          </td>
                          <td align="left">
                           <input type="text" name="cidade">
                          </td>
                         </tr>
                         <tr>
                            <td>
                             <label for="municipio">Município: </label>
                            </td>
                            <td align="left">
                             <input type="text" name="municipio" size="32">
                            </td>
                           </tr>
                         <tr>
                          <td>
                           <label for="cep">CEP: </label>
                          </td>
                          <td align="left">
                           <input type="text" name="cep" size="5" maxlength="5"> - <input type="text" name="cep2" size="3" maxlength="3">
                          </td>
                         </tr>
                        </table>
                       </fieldset>
                       <br>
                       <hr>
                   	      <label><h3>Informações da Matrícula:</h3></label>
         			        <br><br>
                            <div class="escolas" ></div>
                            <label > Escolas:</label>
                            <select name="escolas"id = 'escolas'  onchange="preencheSeries(this.value)">
                                  <option value=""></option>
                            </select>
                                <div class="container">
                                <label> Séries: </label>
                                <select name="series" id="series"  onchange="preencheQuantidadeVagas(this.value)">
                                        <option value=""></option>
                                    </select>
                                    <br><br>      
                                        <div class="turno"></div>
                                        <label> Turno:<br>
                                            <input type="radio" name="turno" value="manhã">Manhã<br>
                                            <input type="radio" name="turno" value="tarde">Tarde<br>
                                        </label>
                                        <div>
                                            <div class=" matricula"></div>
                                            <label> Matrícula:<br>
                                                <input type="radio" name="matricula" value="Pre-matrícula">Pré-matrÍcula<br>
                                            </label>
                                <hr>
        				        </div>
                                <div style="align-items: center;": 3;>
                               <p> <label>
                                    <input type="submit"  name="enviar" value="Enviar">
                                    <input type="reset" name="resetar" value="Limpar">
                                    <input type="button" class="bt" id="impressao" onclick="window.print()" value="Imprimir">  
                                </label></p>
                               
                                
            </body>
            </html>