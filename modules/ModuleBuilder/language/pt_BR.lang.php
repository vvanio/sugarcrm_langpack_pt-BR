<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

/*********************************************************************************
 * Description:  Defines the Brazilian Portuguese language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): Vanio Vieira (vvanio@yahoo.com.br).
 ********************************************************************************/

$mod_strings = array(
	'LBL_LOADING' => 'Carregando' /*for 508 compliance fix*/,
	'LBL_HIDEOPTIONS' => 'Ocultar Opções' /*for 508 compliance fix*/,
	'LBL_DELETE' => 'Excluir' /*for 508 compliance fix*/,
	'LBL_POWERED_BY_SUGAR' => 'Powered By SugarCRM' /*for 508 compliance fix*/,
'help'=>array(
	'package'=>array(
			'create'=>'Forneça um <b>Nome</b> para o pacote. O nome que você digitar deve ser alfanumérico e não pode conter espaços.<br>(Exemplo: HR_Management)<br/><br/>Você pode informar também o <b>Autor</b> e a <b>Descrição</b> para o pacote. <br/><br/>Clique <b>Salvar</b> para criar o pacote.',
			'modify'=>'As propriedades e ações possíveis para o <b>Pacote</b> aparecem aqui.<br><br>Você pode modificar o <b>Nome</b>, <b>Autor</b> e <b>Descrição</b> do pacote, assim como visualizar e modificar todos os módulos contidos no pacote.<br><br>Clique <b>Novo Módulo</b> para criar um novo módulo no pacote.<br><br>Se o pacote contém pelo menos um módulo, você pode <b>Publicar</b> e <b>Implantar</b> o pacote, assim como <b>Exportar</b> as personalizações feitas no pacote.',
			'name'=>'Este é o <b>Nome</b> do pacote atual.<br/><br/>O nome que você informar deve ser alfanumérico, começar com uma letra e não pode conter espaços(Exemplo: HR_Management)',
			'author'=>'Este é o <b>Autor</b> que é mostrado durante a instalação como o nome da entidade que criou o pacote.<br><br>O Autor pode ser tanto uma pessoa como uma empresa.',
			'description'=>'Esta é a <b>Descrição</b> do pacote que é mostrada durante a instalação.',
			'publishbtn'=>'Clique <b>Publicar</b> para salvar todos os dados informados e para criar um arquivo <b>.zip</b> que é a versão instalável do pacote.<br><br>Use o <b>Carregador de Módulos</b> para fazer o upload do arquivo <b>.zip</b> e instalar o pacote.',
			'deploybtn'=>'Clique <b>Implantar</b> para salvar todos os dados informados e instalar o pacote, incluindo todos os módulos, na instância atual do sistema.',
			'duplicatebtn'=>'Clique <b>Duplicar</b> para copiar todo o conteúdo do pacote em um novo pacote e na sequência mostrar este novo pacote.<br/><br/>Para o novo pacote, será gerado um novo nome automaticamente inserindo um número ao final do nome do pacote utilizado como base. Você pode renomear o novo pacote, informando um novo <b>Name</b> e clicando em <b>Salvar</b>.',
			'exportbtn'=>'Clique <b>Exportar</b> para criar um arquivo <b>.zip</b> contendo as personalizações feitas no pacote.<br><br>O arquivo gerado não é uma versão instalável do pacote.<br><br>Use o <b>Carregador de Módulos</b> para importar o arquivo <b>.zip</b> para outra instância do sistema. O <b>Construtor de Módulos</b> exibirá o pacote e todas as personalizações dele.',
			'deletebtn'=>'Clique <b>Excluir</b> para excluir este pacote e todos os arquivos relacionados a ele.',
			'savebtn'=>'Clique <b>Salvar</b> para salvar todos os dados relacionados ao pacote.',
			'existing_module'=>'Clique no ícone <b>Módulo</b> para editar as propriedades e personalizar os campos, relacionamentos e layouts associadoas ao módulo.',
			'new_module'=>'Clique <b>Novo Módulo</b> para criar um novo módulo neste pacote.',
			'key'=>'Esta <b>Chave</b> alfanumérica de 5 caracteres será usada como prefixo de todos os diretórios, nomes de classes e tabelas de banco de dados para todos os módulos no pacote atual.<br><br>A chave é usada como um esforço para garantir nomes únicos de tabelas.',
			'readme'=>'Clique para adicionar um texto <b>Leia-me</b> para este pacote.<br><br>O Leia-me estará disponível no momento da instalação.',

),
	'main'=>array(

	),
	'module'=>array(
		'create'=>'Informe um <b>Nome</b> para o módulo. O <b>Rótulo</b> que você informar aparecerá na aba de navegação.<br/><br/>Escolha mostrar uma aba de navegação para o módulo marcando o checkbox <b>Aba de Navegação</b>.<br/><br/>Então escolha o tipo de módulo que você gostaria de criar.<br/><br/>Selecione um tipo de modelo. Cada modelo contém um conjunto específico de campos, assim como telas pré-definidas, para ser usado como base para seu módulo.<br/><br/>Clique <b>Salvar</b> para criar o módulo.',
		'modify'=>'Você pode alterar as propridades do módulo ou personalizar os <b>Campos</b>, <b>Relacionamentos</b> e <b>Layouts</b> relacionados ao módulo.',
		'importable'=>'Marcar o checkbox <b>Importável</b> irá habilitar a importação para este módulo.<br/><br/>Um link para o Assistente de Importação será mostrado no painel de Atalhos do módulo. O Assitente de Importação facilita a importação de dados de fontes externas em um módulo personalizado.',
		'team_security'=>'Marcar o checkbox <b>Segurança de Equipes</b> irá habilitar a segurança de equipes para este módulo.<br/><br/>Se a segurança de equipes está habilitada, o campo de seleção de Equipes irá aparecer nos registros dos módulo.',
		'reportable'=>'Marcar esta caixa permite que este módulo esteja disponível para gerar relatórios.',
		'assignable'=>'Marcar esta caixa permite que um registro deste módulo pode ser atribuído ao usuário selecionado.',
		'has_tab'=>'Marcar <b>Aba de Navegação</b> irá prover uma aba de navegação para o módulo.',
		'acl'=>'Marcar esta caixa irá habilitar o Controle de Acesso para o módulo, incluindo Segurança a Nível de Campo.',
		'studio'=>'Marcar esta caixa irá permitir que o administrador personalize este módulo pelo Studio.',
		'audit'=>'Marcar esta caixa habilita a Auditoria para este módulo. Modificações em certos campos serão armazenadas de forma que os administradores possam avaliar o histórico de alterações.',
		'viewfieldsbtn'=>'Clique <b>Visualizar Campos</b> para visualizar os campos associados com este módulo e para criar e editar campos personalizados.',
		'viewrelsbtn'=>'Clique <b>Visualizar Relacionamentos</b> para visualizar os relacionamentos associados com este módulo e para criar novos relacionamentos.',
		'viewlayoutsbtn'=>'Clique <b>Visualizar Layouts</b> para visualizar as telas deste módulo e para personalizar o posicionamento dos campos nas telas.',
		'duplicatebtn'=>'Clique <b>Duplicar</b> para copiar as propriedades do módulo em um novo módulo e mostrar este novo módulo.<br/><br/>Para o novo módulo, um nome será gerado automaticamente adicionando-se um número ao final do nome do módulo usado para criá-lo.',
		'deletebtn'=>'Clique <b>Excluir</b> para excluir este módulo.',
		'name'=>'Este é o <b>Nome</b> do módulo atual.<br/><br/>O nome deve ser alfanumperico, deve iniciar com uma letra e não pode conter espaços. (Exemplo: HR_Management)',
		'label'=>'Este é o <b>Rótulo</b> que irá aparecer na aba de navegação para o módulo. ',
		'savebtn'=>'Clique <b>Salvar</b> para salvar todos os dados informados relacionados ao módulo.',
		'type_basic'=>'O modelo <b>Básico</b> provê campos básicos que aparecem nos módulos padrão, como Nome, Atribuído para, Equipe Data de Criação e Descrição.',
		'type_company'=>'O modelo tipo <b>Empresa</b> pProvê campos específicos de empresas, como Nome da Empresa, Indústria e Endereço de Faturamento.<br/><br/>Use este modelo para criar módulos similares ao módulo padrão Contas.',
		'type_issue'=>'O modelo tipo <b>Questão</b> provê campos específicos para ocorrências e Defeitos, como Número, Estado, Prioridade e Descrição.<br/><br/>Use este modelo para criar módulos similares aos módulos padrão Ocorrências e Bugs.',
		'type_person'=>'O modelo tipo <b>Pessoa</b> provê campos específicos para pessoas, como Saudação, Título, Nome, Endereço e Telefones.<br/><br/>Use este modelo para criar módulos similares aos módulos padrão Contatos e Leads.',
		'type_sale'=>'O modelo tipo <b>Venda</b> provê campos específicos para oportunidades, como Fonte de Lead, Estágio, Valor Total e Probabilidade. <br/><br/>Use este modelo para criar módulos similares ao módulo padrão Oportunidades.',
		'type_file'=>'O modelo tipo <b>Arquivo</b> provê campos específicos para documentos, como Nome do Arquivo, Tipo de Documento e Data de Publicação.<br><br>Use este modelo para criar módulos similares ao módulo padrão Documentos.',

	),
	'dropdowns'=>array(
		'default' => 'Todos os <b>Dropdowns</b> para a aplicação são listados aqui.<br><br>Os dropdowns podem ser usados pelos campos dropdwon de qualquer módulo.<br><br>Para realizar alterações em um dropdown existente, clique no nome do dropdown. <br><br>Clique <b>Aficionar Dropdown</b> para criar um novo dropdown.',
		'editdropdown'=>'Lista de Dropdown podem ser usadas por campos padrão ou personalizados em qualquer módulo.<br><br>Informe um <b>Nome</b> para a lista dropodwon.<br><br>Se qualquer pacote de idiomas está instalado na aplicação, voce pode selecionar o <b>Idioma</b> para usar para esta lista de itens.<br><br>No campo <b>Nome do Item</b>, informe um nome para opção da lista dropdown. Este nome não irá aparecer na lista dropdown visível para os usuários.<br><br>No campo <b>Rótulo de Exibição</b>informe um rótulo que será visível para os usuários.<br><br>Depois de informar o nome do item e o rótulo exibido, clique <b>Adicionar</b> para adicionar o item para a lista dropdown.<br><br>Para reordenar itens na lista, arraste e solte itens na posição desejada.<br><br>Para editar o rótulo exibido de um item, clique no ícone<b>Editar</b> e informe o novo rótulo.<br><br>Para excluir um item da lista dropdown, clique no ícone <b>Excluir</b>.<br><br>Para desfazer uma alteração para um rótulo exibido, clique <b>Desfazer</b>.<br><br>Para refazer uma alteração que foi desfeita, clique <b>Refazer</b>.<br><br>Clique <b>Salvar</b> para salvar a lista dropdown.',

	),
	'subPanelEditor'=>array(
		'modify'	=> 'Todos os campos que podem ser mostrados no <b>Subpainel</b> aparecem aqui.<br><br>A coluna <b>Padrão</b> contém os campos que são mostrados no subpainel.<br/><br/>A coluna <b>Oculto</b> contém os campos que podem ser adicionados para a coluna Padrão.'
    ,
		'savebtn'	=> 'Clique <b>Salvar e Implantar</b> para salvar as alterações que você fez e para torná-las ativas para o módulo.',
		'historyBtn'=> 'Clique <b>Visualizar Histórico</b> para visualizar e restaurar um layout do histórico salvo anteriormente.',
	    'historyDefault'=> 'Clique <b>Retaurar Padrão</b> para restaurar a tela ao layout original.',
		'Hidden' 	=> 'Campos <b>Ocultos</b> não aparecem no subpainel.',
		'Default'	=> 'Campos <b>Padrão</b> aparecem no subpainel.',

	),
	'listViewEditor'=>array(
		'modify'	=> 'Todos os campos que podem ser mostrados na <b>Tela de Listagem</b> aparecem aqui.<br><br>A coluna <b>Padrão</b> contém os campos que são mostrados na Tela de Listagem por padrão.<br/><br/>A coluna <b>Disponível</b> contém os campos que podem ser selecionados na Pesquisa para criar uma Tela de Listagem personalizada.<br/><br/>A coluna <b>Oculto</b> contém os campos que podem ser adicionados paras as colunas Padrão e Disponível.'
    ,
		'savebtn'	=> 'Clique <b>Salvar e Implantar</b> para salvar as alterações que você fez e para torná-las ativas para o módulo.',
		'historyBtn'=> 'Clique <b>Visualizar Histórico</b> para visualizar e restaurar um layout do histórico salvo anteriormente.<br><br><b>Restaurar</b> em <b>Visualizar histórico</b> restaura o posicionamento do campo nos layouts salvos anteriormente. Para alterar rótulos de campo, clique no ícone Editar ao lado de cada campo.',
		'historyDefault'=> 'Clique <b>Retaurar Padrão</b> para restaurar a tela ao layout original.<br><br><b>Retaurar Padrão</b> restaura somente o posicionamento do campo no layout original. Para alterar o rótulo do campo, clique no ícone Editar ao lado de cada campo.',
		'Hidden' 	=> 'Campos <b>Ocultos</b> não estão disponíveis atualmente para uso dos usuários nas tela de listagem.',
		'Available' => 'Campos <b>Disponíveis</b> fnão são mostrados por padrão, mas podem ser adicionados na Tela de Listagem pelos usuários.',
		'Default'	=> 'Campos <b>Padrão</b> aparecem nas telas de edição que não foram personalizadas pelos usuários.'
	),
	'popupListViewEditor'=>array(
		'modify'	=> 'Todos os campos que podem ser mostrados na <b>Tela de Listagem</b> aparecem aqui.<br><br>A coluna <b>Padrão</b> contém os campos que são mostrados na Tela de Listagem por padrão.<br/><br/>A coluna <b>Oculto</b> contém os campos que podem ser adicionados paras as colunas Padrão e Disponível.'
    ,
		'savebtn'	=> 'Clique <b>Salvar e Implantar</b> para salvar as alterações que você fez e para torná-las ativas para o módulo.',
		'historyBtn'=> 'Clique <b>Visualizar Histórico</b> para visualizar e restaurar um layout do histórico salvo anteriormente.<br><br><b>Restaurar</b> em <b>Visualizar histórico</b> restaura o posicionamento do campo nos layouts salvos anteriormente. Para alterar rótulos de campo, clique no ícone Editar ao lado de cada campo.',
		'historyDefault'=> 'Clique <b>Retaurar Padrão</b> para restaurar a tela ao layout original.<br><br><b>Retaurar Padrão</b> restaura somente o posicionamento do campo no layout original. Para alterar o rótulo do campo, clique no ícone Editar ao lado de cada campo.',
		'Hidden' 	=> 'Campos <b>Ocultos</b> não estão disponíveis atualmente para uso dos usuários nas tela de listagem.',
		'Default'	=> 'Campos <b>Padrão</b> aparecem nas telas de edição que não foram personalizadas pelos usuários.'
	),
	'searchViewEditor'=>array(
		'modify'	=> 'Todos os campos que podem ser mostrados na <b>Pesquisa</b> aparecem aqui.<br><br>A coluna <b>Padrão</b> contém os campos que serão mostrados no Formulário de Pesquisa.<br/><br/>A coluna <b>Oculto</b> contém os campos que estão disponíveis para voce como Administrador adicionar ao Formulário de Pesquisa.'
    ,
		'savebtn'	=> 'Clique <b>Salvar e Implantar</b> para salvar as alterações que você fez e para torná-las ativas.',
		'Hidden' 	=> 'Campos <b>Ocultos</b> não aparacem na Pesquisa.',
		'historyBtn'=> 'Clique <b>Visualizar Histórico</b> para visualizar e restaurar um layout do histórico salvo anteriormente.<br><br><b>Restaurar</b> em <b>Visualizar histórico</b> restaura o posicionamento do campo nos layouts salvos anteriormente. Para alterar rótulos de campo, clique no ícone Editar ao lado de cada campo.',
		'historyDefault'=> 'Clique <b>Retaurar Padrão</b> para restaurar a tela ao layout original.<br><br><b>Retaurar Padrão</b> restaura somente o posicionamento do campo no layout original. Para alterar o rótulo do campo, clique no ícone Editar ao lado de cada campo.',
		'Default'	=> 'Campos <b>Padrão</b> aparecem na Pesquisa.'
	),
	'layoutEditor'=>array(
		'defaultdetailview'=>'A area de <b>Layout</b> contém os campos que são mostrados atualmente na <b>Tela de Detalhe</b>.<br/><br/>A <b>Caixa de Ferramentas</b> contém a <b>Lixeira</b> e os campos e elementos de tela que podem ser adicionados ao layout.<br><br>Faça as alterações de layout arrastando e soltando elementos e campos entre a <b>Caixa de Ferramentas</b> e o <b>Layout</b> e dentro do próprio layout.<br><br>Para remover um campo do layout, arraste e solte o campo na <b>Lixeira</b>. O campo estará então disponível na <b>Caixa de Ferramentas</b> para ser adicionado ao layout.'
    ,
		'defaultquickcreate'=>'A area de <b>Layout</b> contém os campos que são mostrados atualmente no formulário de <b>Criação Rápida</b>.<br/><br/>O formulário de Criação Rápida aparece no subpainel para o módulo quando o botão Criar é clicado.<br/><br />		A <b>Caixa de Ferramentas</b> contém a <b>Lixeira</b> e os campos e elementos de tela que podem ser adicionados ao layout.<br><br>Faça as alterações de layout arrastando e soltando elementos e campos entre a <b>Caixa de Ferramentas</b> e o <b>Layout</b> e dentro do próprio layout.<br><br>Para remover um campo do layout, arraste e solte o campo na <b>Lixeira</b>. O campo estará então disponível na <b>Caixa de Ferramentas</b> para ser adicionado ao layout.'
    ,
		//this default will be used for edit view
		'default'	=> 'A area de <b>Layout</b> contém os campos que são mostrados atualmente na <b>Tela de Edição</b>.<br/><br/>A <b>Caixa de Ferramentas</b> contém a <b>Lixeira</b> e os campos e elementos de tela que podem ser adicionados ao layout.<br><br>Faça as alterações de layout arrastando e soltando elementos e campos entre a <b>Caixa de Ferramentas</b> e o <b>Layout</b> e dentro do próprio layout.<br><br>Para remover um campo do layout, arraste e solte o campo na <b>Lixeira</b>. O campo estará então disponível na <b>Caixa de Ferramentas</b> para ser adicionado ao layout.'
    ,
		'saveBtn'	=> 'Clique <b>Salvar</b> para preservar as alterações que você fez desde a última vez que você o salvou.<br><br>As alterações não serão mostradas no módulo enquanto você não implantá-las.',
		'historyBtn'=> 'Clique <b>Visualizar Histórico</b> para visualizar e restaurar um layout do histórico salvo anteriormente.<br><br><b>Restaurar</b> em <b>Visualizar histórico</b> restaura o posicionamento do campo nos layouts salvos anteriormente. Para alterar rótulos de campo, clique no ícone Editar ao lado de cada campo.',
		'historyDefault'=> 'Clique <b>Retaurar Padrão</b> para restaurar a tela ao layout original.<br><br><b>Retaurar Padrão</b> restaura somente o posicionamento do campo no layout original. Para alterar o rótulo do campo, clique no ícone Editar ao lado de cada campo.',
		'publishBtn'=> 'Clique <b>Salvar e Implantar</b> para salvar todas as alterações que você fez no layout desde a última vez que você o salvou, e para torná-las ativas para o módulo.<br><br>O layout estará disponível imediatamente no módulo',
		'toolbox'	=> 'A <b>Caixa de Ferramentas</b> contém a <b>Lixeira</b> e os campos e elementos de tela que podem ser adicionados ao layout.<br/><br/>Os elementos de tela e campos podem ser arrastados e soltados no layout, assim como os elementos de tela e campos podem ser arrastados e soltados do layout na Caixa de Ferramentas.<br><br>Os elementos de layout são <b>Painéis</b> e <b>Linhas</b>. Adicionar uma nova linha ou painel ao layout provê locais adicionais no layout para os campos.<br/><br/>Arraste e solte qualquer dos campos na Caixa de Ferramentas ou layout sobre uma posição de campo ocupada para trocar as locações entre os dois campos.<br/><br/>O campo <b>(enchimento)</b> cria um espaço em branco no layout onde ele é colocado.',
		'panels'	=> 'A área de <b>Layout</b> provê uma visão de como o layout irá aparecer no módulo quando as alterações no layout forem implantadas..<br/><br/>Você pode reposicionar campos, linhas e painéis arrastando e soltando eles na posição desejada..<br/><br/>Remova elementos arrastasndo e soltando eles na <b>Lixeira</b> na Caixa de Ferramentas, ou adicione novos elementos e campos arrastando-os da <b>Caixa de Ferramentas</b> e soltando-os na posição desejada no layout.',
		'delete'	=> 'Arraste e solte qualuqre elemento aqui para removê-lo do layout.',
		'property'	=> 'Editar o <b>Rótulo de Exibição</b> para este campo. <br/>A <b>Ordem de Tabulação</b> controla em que ordem a tecla tab vai alternar entre os campos.',
	),
	'fieldsEditor'=>array(
		'default'	=> 'Os <b>Campos</b> que estão disponíveis para o módulo são listados aqui pelo Nome do Campo.<br><br>Campos Personalizados criados para o módulo iráo aparecer abaixo dos campos que estão disponpiveis para o módulo por padrão.<br><br>Para editar um campo, clique no <b>Nome do Campo</b>.<br><br>Para criar um novo campo, clique <b>Adicionar Campo</b>.',
		'mbDefault'=>'Os <b>Campos</b> que estão disponíveis para o módulo são listados aqui pelo Nome do Campo.<br><br>Para configurar as propriedades do campo, clique no  <b>Nome do Campo</b>.<br><br>Para criar um novo campo, clique <b>Adicionar Campo</b>. O Rótulo assim como as outras propridades do novo campo podem ser editadas depois da criação clicando no <b>Nome do Campo</b>.<br><br>Depois que o módulo é implantado, os novos campos criados no Construtor de Módulos são considerados como campos padrão no módulo implantado em Studio.',
        'addField'	=> 'Selecione um <b>Tipo de Dados</b> para o novo campo. O tipo que você selecionar determina o tipo de caracteres podem ser inseridos no campo. Por exemplo, apenas os números que são números inteiros podem ser inseridos em campos que são do tipo de dados inteiro.<br><br>Forneça um <b>Nome</b> para o campo. O nome deve ser alfanumérico e não pode conter espaços. Underscores são válidos.<br><br>O <b>Rótulo de Exibição</b> é o rótulo que irá aparecer para os campos nos layouts de módulos. O <b>Rótulo do Sistema</b> é usado para se referir ao campo no código.<br/>Dependendo do tipo de dados selecionado para o campo, algumas ou todas as seguintes propriedades podem ser definidas para o campo<br><br>b>Texto de Ajuda</b> aparece temporariamente enquanto o usuário passa o mouse sobre o campo e pode ser usado para solicitar ao usuário pelo o tipo de entrada desejada.<br><br><b>Texto de Comentário</b> só é visto dentro Studio e/ou Construtor de Módulos, e pode ser usado para descrever o campo para os administradores.<br><br><b>Valor Padrão</b> será exibido no campo. Os usuários podem inserir um novo valor no campo ou usar o valor padrão.<br><br>Selecione o checkbox <b>Atualização em Massa</b> para de ser capaz de usar o recurso de Atualização em Massa para o campo.<br><br>O <b>Tamanho Máximo</b> é o valor que determina o número máximo de caracteres que podem ser inseridos no campo<br><br>Selecione o checkbox <b>Campo Obrigatório</b> para tornar o campo obrigatório. Um valor deve ser fornecido para o campo, para ser capaz de salvar um registro que contém o campo.<br><br>Selecione o checkbox <b>Reportável</b> para permitir que o campo possa ser utilizado para filtros e para exibir dados em relatórios.<br><br>Selecione o checkbox <b>Auditoria</b> para ser capaz de controlar alterações para o campo no Registro de Mudanças.<br><br>Selecione uma opção <b>Importável</b> para permitir, proibir ou exigir que o campo seja importado para no Assistente de Importação.<br><br>Selecione uma opção <b>Mesclar Duplicados</b> para ativar ou desativar as funcionalidades Mesclara Duplicados e Procurara Duplicados<br><br>Propriedades adicionais podem ser definidas para determinados tipos de dados.',
		'editField' => 'As propriedades deste campo podem ser personalizadas.<br><br>Clique <b>Clonar</b> para criar um novo campo com as mesmas propriedades.',
        'mbeditField' => 'O <b>Rótulo de Exibição</b> de um campo modelo pode ser personalizado. As outras propriedades do campo não podem ser personalizadas.<br><br>Clique <b>Clonar</b> para criar um novo campo com as mesmas propriedades.<br><br>Para remover um campo modelo e não mostrá-lo mais no módulo, remova o campo das <b>Telas</b> apropriadas.'

	),
	'exportcustom'=>array(
	    'exportHelp'=>'Exportar personalizações feitas no Studio criando pacotes que podem ser carregados em outra instância do sistema através do <b>Carregador de Módulos</b>.<br><br>Primeiro, informe um <b>Nome do Pacote</b>. Você pode informar <b>Autor</b> e <b>Descrição</b> para o pacote também.<br><br>Selecione o(s) módulo(s) que contém as personalizações que voce quer exportar. Somente módulos que tenham personalizações irão aparecer para você selecionar.<br><br>Então clique <b>Exportar</b> para criar um arquivo .zip para o pacote contendo as personalizações.',
	    'exportCustomBtn'=>'Clique <b>Exportar</b> para criar um arquivo .zip para o pacote contendo as personalizações que voce quer exportar.',
	    'name'=>'Este é o <b>Nome</b> do pacote. Este nome será mostrado durante a instalação.',
	    'author'=>'Este é o <b>Autor</b> que será mostrado durante a instalação como on nome da entidade que criou o pacote. O autor pode ser tanto uma pessoa quanto uma empresa.',
	    'description'=>'Esta é a <b>Descrição</b> do pacote que será mostrada durante a instalação.',
	),
	'studioWizard'=>array(
		'mainHelp' 	=> 'Bem vindo a área de <b>Ferramentas do Desenvolvedor</b>. <br/><br/>Use as ferramentas desta área para criar ou gerenciar módulo e campos padrão e personalizados.',
		'studioBtn'	=> 'Use o <b>Studio</b> para personalizar módulos implantados.',
		'mbBtn'		=> 'Use o <b>Construtor de Módulos</b> para criar novos módulos.',
		'sugarPortalBtn' => 'Use o <b>Editor do Sugar Portal</b> para gerenciar e personalizar o Sugar Portal.',
		'dropDownEditorBtn' => 'Use o <b>Editor de Dropdown</b> para adicionar e editar dropdowns globais para oas campos dropdown.',
		'appBtn' 	=> 'Modo de aplicação é o lugar onde você pode personalizar várias propriedades do programa, tais como quantos relatórios TPS são exibidas na página inicial',
		'backBtn'	=> 'Retornar ao passo anterior.',
		'studioHelp'=> 'Use o <b>Studio</b> para determinar que informação e como ela é mostrada nos módulos.',
		'moduleBtn'	=> 'Clique para editar este módulo.',
		'moduleHelp'=> 'Os componentes que voce pode personalizar para o móduulo aparecem aqui.<br><br>Clique num ícone para selecionar o componente para editar.',
		'fieldsBtn'	=> 'Criar e customizar <b>Campos</b> para armazenar informações no módulo.',
		'labelsBtn' => 'Editar os <b>Rótulos</b> que são mostrados para os campos e outros títulos no módulo.'	,
	    'relationshipsBtn' => 'Adicionar ou visualizar <b>Relacionamentos</b> existentes para o módulo.' ,
		'layoutsBtn'=> 'Personalizar os <b>Layouts</b> do módulo. Os <b>Layouts</b> são as diferentes telas do módulo contendo campos.<br><br>Você pode determinar que campo aparacem e como eles estão organizados em cada tela.',
		'subpanelBtn'=> 'Determine que campos aparecem nos <b>Subpainéis</b> do módulo.',
		'portalBtn' =>'Personalize os <b>Layouts</b> do módulos que aparecem no <b>Sugar Portal</b>.',
		'layoutsHelp'=> 'Os <b>Layouts</b> dos módulos que podem ser personalizados aparecem aqui.<br><br>Os layouts mostram os campos de exibição e os campos de dados.<br><br>Clique num ícone para selecionar o layout para editar.',
		'subpanelHelp'=> 'Os <b>Subpainéis</b> do módulo que podem ser personalizados aparecem aqui.<br><br>Clique num ícone para selecionar o módulo para editar.',
        'newPackage'=>'Clique <b>Novo Pacote</b> para criar um novo pacote.',
        'exportBtn' => 'Clique <b>Exportar Personalizações</b> para criar e fazer o download de um pacote contendo as personalizações feitas no Studio para módulos específicos.',
        'mbHelp'    => 'Use o <b>Construtor de Módulos</b> para criar pacotes contendo módulos personalizados baseados nos módulos padrão ou em objectos personalizados.',
	    'viewBtnEditView' => 'Personalizar a <b>Tela de Edição</b> do Módulo.<br><br>A Tela de Edição é o formulário que contém os campos de dados para capturar os dados informados pelos usuários.',
	    'viewBtnDetailView' => 'Personalizar a <b>Tela de Detalhe</b> do Módulo.<br><br>A Tela de Detalhe mostra os dados informados pelos usuários.',
		'viewBtnDashlet' => 'Personalizar o <b>Sugar Dashlet</b>, incluindo a Tela de Listagem e a Tela de Pesquisa.<br><br>O Sugar Dashlet estará disponível para ser adicionado nas páginas do módulo Principal.',
	    'viewBtnListView' => 'Personalizar a <b>Tela de Listagem</b> do Módulo.<br><br>Os resultados das pesquisa aparecem na Tela de Listagem.',
	    'searchBtn' => 'Personalizar a <b>Tela de Pesquisa</b> do Módulo.<br><br>Determine que campos podem ser usados para filtrar os registros que aparecem na Tela de Listagem.',
		'viewBtnQuickCreate' =>  'Personalizar o formulário de <b>Criação Rápida</b> do Módulo.<br><br>O formulário de Criação Rápida aparace no subpanel e no módulo E-mails.',

	    'searchHelp'=> 'Os formulários de <b>Pesquisa</b> que podem ser personalizados aparecem aqui.<br><br>Formulários de pesquisa contém os campos para filtrar os registros.<br><br>Clique num ícone para selecionar a pesquisa para editar.',
	    'dashletHelp' =>'Os <b>Sugar Dashlets</b> que podem ser personalizados aparecem aqui.<br><br>O Sugar Dashlet estará disponível para ser adicionado nas páginas do módulo Principal.',
	    'DashletListViewBtn' =>'A <b>Tela de Listagem do Sugar Dashlet</b> mostra registros com base nos filtros de pesquisa do Sugar Dashlet.',
	    'DashletSearchViewBtn' =>'A <b>Tela de Pesquisa do Sugar Dashlet</b> filtra os registros para a tela de listagem do Sugar Dashlet.',
	    'popupHelp' =>'Os <b>Popups</b> que podem ser personalizados aparecem aqui.<br>',
	    'PopupListViewBtn' =>'A <b>Tela de Listagem do Popup</b> mostra registros com base nos filtros de pesquisa do Popup.',
	    'PopupSearchViewBtn' =>'A <b>Tela de Pesquisa do Popup</b> filtra os registros para a tela de listagem do Popup.',
		'BasicSearchBtn' => 'Personalize o formulário de <b>Pesquisa Básica</b> que aparece na aba Pesquisa Básica da área de Pesquisa do módulo.',
	    'AdvancedSearchBtn' => 'Personalize o formulário de <b>Pesquisa Avançada</b> que aparece na aba Pesquisa Avançada da área de Pesquisa do módulo.',
	    'portalHelp' => 'Gerenciar e personalizar o <b>Sugar Portal</b>.',
	    'SPUploadCSS' => 'Fazer upload de uma <b>Tabela de Estilos</b> para o Sugar Portal.',
	    'SPSync' => '<b>Sincronizar</b> as personalizações para a instância do Sugar Portal.',
	    'Layouts' => 'Personalizar os <b>Layouts</b> dos módulos do Sugar Portal.',
	    'portalLayoutHelp' => 'Os módulos do Sugar Portal aparecem aqui.<br><br>Selecione um módulo para editar os <b>Layouts</b>.',
		'relationshipsHelp' => 'Todos os <b>Relacionamentos</b> que existem entre o módulo e outros módulos implementados aparecem aqui.<br><br>O <b>Nome</b> do Relacionamento é o nome gerado pelo sistema para o relacionamento.<br><br>O <b>Módulo Primário</b> é o módulo que possui os relacionamentos. Por exemplo, todas as propriedades dos relacionamentos para os quais o módulo de Contas é o módulo principal são armazenados nas tabelas de banco de dados de contas.<br><br>O <b>Tipo</b> é o tipo de relacionamento existente entre a módulo Prinicipal e o <b>Módulo Relacionado</b>.<br><br>Clique no título da coluna para classificar pela coluna<br><br>Clique em uma linha na tabela de relacionamentos para exibir as propriedades associadas ao relacionamento.<br><br>Clique em <b>Adicionar Relacionamento</b> para criar um novo relacionamento.<br><br>Relacionamentos podem ser criados entre quaisquer dois módulos implantados.',
        'relationshipHelp'=>'<b>Relacionamentos</b> podem ser criados entre quaisquer dois módulos implantados.<br><br>Relacionamentos são visualmente expressos através de subpainéis e campos relacionados nos registros dos módulos.<br><br>Selecione um dos seguintes <b>Tipos</b> de Relacionamentos para o módulo:<br><br><b>UM-para-UM</b> - Ambos os registros dos módulos contém campos relacionados.<br><br><b>UM-para-MUITOS</b> - O registro do Módulo Primário contém um campo relacionado.<br><br><b>MUITOS-para-MUITOS</b> - Ambos os registros dos módulos irão mostrar subpainéis.<br><br>Selecione o <b>Módulo Relacionado</b> para o relacionamento.<br><br>Se o tipo de relacionamento envolver subpainéis, selecione os subpainéis apropriados para os módulos.<br><br>Clique <b>Salvar</b>para criar o relacionamento.',
		'convertLeadHelp' => "Aqui você pode adicionar módulos para a tela de conversão e modificar os layouts dos existentes.<br/>
		Você pode reordenar os módulos arrastando-os e soltando-os suas linhas na tabela.<br/><br/>

		<b>Módulo:</b> O nome do módulo.<br/><br/>
		<b>Obrigatório:</b> Módulos obrigatórios devem ser criados ou selecionados antes de converter o Lead.<br/><br/>
		<b>Copiar Dados:</b> Se marcado, campos do Lead serão copiados para campos com o mesmo nome nos novos registros criados.<br/><br/>
		<b>Permitir Seleção:</b> Módulos com umcampo relacionado em Contatos podem ser selecionados ao invés de serem criados durante o processo de conversão do Lead.<br/><br/>
		<b>Editar:</b> Modificar a tela de conversão deste módulo.<br/><br/>
		<b>Excluir:</b> Remover este módulo da tela de conversão.<br/><br/>
		",
        'editDropDownBtn' => 'Editar um Dropdown global',
		'addDropDownBtn' => 'Adicionar um novo Dropdown global',
	),
	'fieldsHelp'=>array(
		'default'=>'The <b>Fields</b> in the module are listed here by Field Name.<br><br>The module template includes a pre-determined set of fields.<br><br>To create a new field, click <b>Add Field</b>.<br><br>To edit a field, click the <b>Field Name</b>.<br/><br/>After the module is deployed, the new fields created in Module Builder, along with the template fields, are regarded as standard fields in Studio.',
	),
	'relationshipsHelp'=>array(
		'default'=>'Os <b>Relacionamentos</b> que existem entre o módulo e outros módulos implementados aparecem aqui.<br><br>O <b>Nome</b> do Relacionamento é o nome gerado pelo sistema para o relacionamento.<br><br>O <b>Módulo Primário</b> é o módulo que possui os relacionamentos. As propriedades do relacionamento são armazenadas nas tabelas de banco de dados pertencentes ao módulo primário.<br><br>O <b>Tipo</b> é o tipo de relacionamento existente entre a módulo Prinicipal e o <b>Módulo Relacionado</b>.<br><br>Clique no título da coluna para classificar pela coluna<br><br>Clique em uma linha na tabela de relacionamentos para exibir as propriedades associadas ao relacionamento.<br><br>Clique em <b>Adicionar Relacionamento</b> para criar um novo relacionamento.',
		'addrelbtn'=>'o mouse sobre a ajuda para adicionar relacionamento.',
		'addRelationship'=>'<b>Relacionamentos</b> podem ser criados entre quaisquer dois módulos implantados.<br><br>Relacionamentos são visualmente expressos através de subpainéis e campos relacionados nos registros dos módulos.<br><br>Selecione um dos seguintes <b>Tipos</b> de Relacionamentos para o módulo:<br><br><b>UM-para-UM</b> - Ambos os registros dos módulos contém campos relacionados.<br><br><b>UM-para-MUITOS</b> - O registro do Módulo Primário contém um campo relacionado.<br><br><b>MUITOS-para-MUITOS</b> - Ambos os registros dos módulos irão mostrar subpainéis.<br><br>Selecione o <b>Módulo Relacionado</b> para o relacionamento.<br><br>Se o tipo de relacionamento envolver subpainéis, selecione os subpainéis apropriados para os módulos.<br><br>Clique <b>Salvar</b>para criar o relacionamento.',
	),
	'labelsHelp'=>array(
		'default'=> 'Os <b>Rótulos</b> para os campos e outros títulos do módulo podem ser alterados.<br><br>Edite o rótulo clicando no campo, informando um novo rótulo e clicando <b>Salvar</b>.<br><br>Se qualquer pacote de idiomas estiver instalado na aplicação, você pode selecionar o <b>Idioma</b> para usar para os rótulos.',
		'saveBtn'=>'Clique <b>Salvar</b>para salvar todas as alterações.',
		'publishBtn'=>'Clique <b>Salvar e Implantar</b> para salvar todas as alterações e torná-las ativas.',
	),
	'portalSync'=>array(
	    'default' => 'Informe a <b>URL do Sugar Portal</b> do portal da instância para atualizar, e clique <b>Ir</b>.<br><br>Então informe um nome de usuário e senha válidos no sistema, e depois clique <b>Inciar Sincronização</b>.<br><br>As personalizações feitas para as <b>Telas</b> do Sugar Portal, junto com a <b>Folha de Estilos</b> se foi carregada alguma, serão transferidas para a instância do portal.',
	),
	'portalStyle'=>array(
	    'default' => 'Você pode personalizar o visual do Sugar Protal utilizando uma folha de estilos.<br/><br/>Selecione um <b>Folha de Estilos</b> para carregar.<br/><br/>A folha de estilos será implantada no Supar Portal na próxima sincronização realizada.',
	),
),

'assistantHelp'=>array(
	'package'=>array(
			//custom begin
			'nopackages'=>'Para inciar em um projeto, clique <b>Novo Pacote</b> para criar um novo pacote para seu(s) módulo(s) personalizado(s).<br/><br/>Cada pacote pode conter um ou mais módulos.<br/><br/>Por exemplo, pode quere criar um pacote contendo um módulo personalizado que está relacionado com o módulo padrão Contas. Ou, você pode querer criar um pacote contendo diversos módulos personalizados, que trabalham em conjunto como um projeto e que são relacionados entre sí e aos módulos da aplicação.',
			'somepackages'=>'Um <b>pacote</b> é como um recipiente para módulos personalizados, todos eles como parte de um projeto. O pacote pode conter um ou mais módulos personalizados que podem ser relacionados entre sí ou com os módulos padrão do sistema.<br/><br/>Depois de criar um pacote para seu projeto, você pode criar módulos para este pacote imediatamente, ou você pode retornar ao Contrutor de Módulos mais tarde para concluir o projeto.<br><br>Quando o projeto estiver concluído, vocẽ pode <b>Implantar</b> o pacote para instalar os módulos personalizados na aplicação.',
			'afterSave'=>'Seu novo pacote deve conter pelo menos um módulo. Você pode criar um ou mais módulos por pacote.<br/><br/>Clique <b>Novo Módulo</b> para criar um módulo personalizado para este pacote.<br/><br/> Depois de ter criado ao menos um módulo, você pode publicar ou implantar o pacote para torná-lo disponível para sua instância e/ou outras instâncias.<br/><br/>Para implantar o pacote em um simples passo na instância do sistema, clique <b>Implantar</b>.<br><br>Clique <b>Publicar</b> para salvar o pacote com um arquivo <b>.zip</b>. Despois que o arquivo .zip tiver sido salvo para seu computador, use o <b>Carregador de Módulos</b> para carregar e instalar o pacote na sua instância do sistema.<br/><br/>Você pode distribuir o arquivo para outros usuários para que carreguem e implantem em suas instancias.',
			'create'=>'Um <b>pacote</b> é como um recipiente para módulos personalizados, todos eles como parte de um projeto. O pacote pode conter um ou mais módulos personalizados que podem ser relacionados entre sí ou com os módulos padrão do sistema.<br/><br/>Depois de criar um pacote para seu projeto, você pode criar módulos para este pacote imediatamente, ou você pode retornar ao Contrutor de Módulos mais tarde para concluir o projeto.',
			),
	'main'=>array(
		'welcome'=>'Use as <b>Ferramentas do Desenvolovedor</b> para criar e gerenciar módulos e campos padrão ou personalizados.<br/><br/>Para gerenciar módulos na aplicação, clique <b>Studio</b>.<br/><br/>Para criar módulos personalizados, clique <b>Construtor de Módulos</b>.',
		'studioWelcome'=>'Todos os módulos atualmente instalados, incluindo padrão e instalados, são personalizáveis através do Studio.'
	),
	'module'=>array(
		'somemodules'=>"Desde que o pacote atual contenha pelo menos um módulo, você pode <b>Implantar</b> os módulos do pacote em sua instância do sistema ou <b>Publicar</b> o pacote para ser instalado na instância atual do sistema ou em outra instância usando o <b>Carregador de Módulos</b>.<br/><br/>Para instalar o pacote diretamente em sua instância do sistema, clique <b>Implantar</b>.<br><br>Para criar um arquivo .zip do pacote que possa ser carregado e instalado nesta instância ou em outras intâncias usando o <b>Carregador de Módulo</b>, clique <b>Publicar</b>.<br/><br/>Você pode construir módulos para este pacote em estágios, e publicá-lo ou implantá-lo somente quanto estiver pronto.<br/><br/>Despois de Publicar ou Implantar um pacote, você pode fazer alterações nas propriedades do pacote e personalizar os módulos. Então republicar ou reimplantar o pacote para aplicar as alterações." ,
		'editView'=> 'Aqu você pode editar campos existentes. Você pode remover qualquer campo existente ou adicionar campos disponíveis ao painel da esquerda.',
		'create'=>'Quando escolher o <b>Tipo</b> de módulo que quer criar, tenha em mente os tipos de campos que gostaria de ter no módulo.<br/><br/>Cada modelo de módulo contém um conjunto de campos perinentes ao tipo de módulo descrito pelo seu título.<br/><br/><b>Básico</b> - Provê campos básicos que aparecem nos módulos padrão, como Nome, Atribuído para, Equipe Data de Criação e Descrição.<br/><br/><b>Empresa</b> - Provê campos específicos de empresas, como Nome da Empresa, Indústria e Endereço de Faturamento. Use este modelo para criar módulos similares ao módulo padrão Contas.<br/><br/><b>Pessoa</b> - Provê campos específicos para pessoas, como Saudação, Título, Nome, Endereço e Telefones. Use este modelo para criar módulos similares aos módulos padrão Contatos e Leads.<br/><br/><b>Questão</b> - Provê campos específicos para ocorrências e Defeitos, como Número, Estado, Prioridade e Descrição. Use este modelo para criar módulos similares aos módulos padrão Ocorrências e Bugs.<br/><br/>Nota: Despois de criar o módulo, você pode editar os rótulos dos campos providos pelo modelo, assim como criar outro campos personalizados e adiconá-los para as telas do módulo.',
		'afterSave'=>'Personalize o módulo conforme suas necessidades, editando ou adicionando campos, estabelecendo relacionamentos com outros módulos e modificando o posicionamento dos campos nas telas.<br/><br/>Para visualizar os campos do modelo e personalizados do módulo, clique <b>Visualizar Campos</b>.<br/><br/>Para criar e gerenciar relacionamentos entre o módulo e outros módulos, existentes na aplicação ou outros módulos personalizados do mesmo pacote, clique <b>Visualizar Relacionamentos</b>.<br/><br/>Para editar as telas do módulo, clique <b>Visualizar Layouts</b>. Você pode alterar as Telas de Edição, Detalhe e Listagem do módulo assim como pode fazer para o restante da aplicação através do Studio.<br/><br/>Para criar um módulo com as mesmas características do módulo atual, clique <b>Duplicar</b>. Você pode personalizar ainda mais este novo módulo.',
		'viewfields'=>'Os campos do módulo podem ser personalizados para atender suas necessidades.<br/><br/>Você não pode excluir campos padrão, mas pode removê-los para criar um lauoyt apropriado nas Telas.<br/><br/>Você pode criar rapidamente novos campos que têm propriedades similares aos campos existentes clicando <b>Clonar</b> no formulário <b>Propriedades</b>. Informe q=as novas propriedades do campo e clique <b>Salvar</b>.<br/><br/>É recomendado que você defina todas as propriedades para os campos padrão e personalizados antes de puvlicar ou instalar o pacote que contém o módulo personalizado.',
		'viewrelationships'=>'Voce pode criar relacionamento Muitos-para-Muitos entre o módulo atual e outros módulo no pacote, e/ou entre o módulo atual e os módulos já instalados na aplicação.<br/><br/>Para criar relacionamentos Um-para-Muitos e Um-para-Um, crie campos <b>Relacionado</b> e <b>Relacionamento Flexível</b> para os módulos.',
		'viewlayouts'=>'Você pode controlar que campos estão disponíveis para capturar dados na <b>Tela de Edição</b>. Você também pode controlar que campos mostrar na <b>Tela de Detalhe</b>. Estas telas não têm que ser identicas.<br/><br/>O formulário de <b>Criação Rápida</b> é mostrado quando o botão <b>Criar</b> de um Subpainel é clicado. Por padrão, o formulário de <b>Criação Padrão</b> tem o mesmo layout que a <b>Tela de Edição</b> padrão. Você pode personalizar o formulário de Criação Rápida para que tenha mais ou menos campos que a Tela de Edição.<br/><br/>Você pode determinar a segurança do módulo usando a personalização de layout em <b>Gerenciamento de Funções</b>.<br/><br/>',
		'existingModule' =>'Depois de criar e customizar este módulo, você pode criar módulos adicionais ou retornar ao pacote para <b>Publicar</b> ou <b>Implantar</b> o pacote.<br/><br/>Para criar móduls adicionais, clique <b>Duplicar</b> para criar um módulo com as mesmas propriedades do módulo atual, ou volte ao pacote e clique <b>Novo Módulo</b>.<br/><br/>Se você está pronto para <b>Publicar</b> e <b>Implantar</b> o pacote contendo este módulo, volte ao pacote e execute esta funções. Você pode publicar e implantar pacotes contendo pelo menos um módulo.',
		'labels'=> 'Os rótulos dos campos padrão assim como os rótulos dos campos personalizados podem ser alterados. Mudar os rótulos dos campos não altera o dado ou o tipo de dado armazenado nestes campos.',
	),
	'listViewEditor'=>array(
		'modify'	=> 'Há três colunas mostradas na esquerda. A coluna "Padrão" contém os campos que são mostrados na Tela de Listagem por padrão. A coluna "Disponível" contém os campos que um usuário pode escolher para criar um Tela de Listagem personalizada. A coluna "Oculto" contém os campos disponíveis para você como Administrador pode adicionar nas colunas Padrão e Disponível para uso dos usuários.',
		'savebtn'	=> 'Clicando <b>Salvar</b> irá salvar as alterações e torná-las ativas.',
		'Hidden' 	=> 'Campos ocultos são os que não estão disponíveis atualmente para uso dos usuários nas tela de listagem.',
		'Available' => 'Campos disponíveis são os campos que não são mostrados por padrão, mas que podem ser ativados pelos usuários.',
		'Default'	=> 'Campos padrão são mostrados aos usuários que ainda não criaram telas de listagem personalizadas.'
	),

	'searchViewEditor'=>array(
		'modify'	=> 'Há duas colunas mostradas a esquerda. A coluna "Padrão" contém os campos que serão mostrados na tela de pesquisa, e a coluna "Ocultos" contém os campos disponíveis para você com Administrador adiconar na tela.',
		'savebtn'	=> 'Clicando <b>Salvar e Implantar</b> irá salvar as alterações e torná-las ativas.',
		'Hidden' 	=> 'Campos Ocultos são campos que não serão mostrados na tela de pesquisa.',
		'Default'	=> 'Campos Padrão serão mostrados na tela de pesquisa.'
	),
	'layoutEditor'=>array(
		'default'	=> 'Há duas colunas mostradas a esquerda. A coluna da direita, rotulada como Layout Atual ou Previsualização de Layout, é onde você modifica o lyout do módulo. A coluna da esquerda, rotulada como Caixa de ferramentas, contém elementos úteis e ferramentas para você utilização na edição do layout.<br/><br/>Se a área de layout está rotulada como Layout Atual então você está trabalhando em uma cópia do layoutda tela atualmente utilizada pelo módulo.<br/><br/>Se está rotulada como Previsualização de Layout então você está trabalhando em uma cópia criada anteriormente através do botão Salvar, e já deve ter realizado alterações a partir da versão visualizada pelos usuários no módulo.',
		'saveBtn'	=> 'Clicando neste botão irá salvar o layout preservando suas alteraçãoes. Quando você retornar a este módulo você irá iniciar a partir deste layout modificado. Entretanto, seu layot não será visivel pelos usuários do módulo até que você clique no botão "Salvar e Implantar".',
		'publishBtn'=> 'Clicando neste botão irá implantar o layout. Isto significa que este layout será visível imediatamente pelos usuários deste módulo.',
		'toolbox'	=> 'A Caixa de ferramentas contém uma variedade de funcionalidades úteis para edição de layouts, incluindo um lixeira, um conjunto de elementos adicionais e um conjunto de campos disponíveis. Qualquer um destes pode ser arrastado e soltado diretamente no layout.',
		'panels'	=> 'Esta área monstra como seus layouts serão visíveis para os usuários deste módulo quando implantados.<br/><br/>Voce pode reposicionar elementos como campos, linhas e painéis arrastando-os e soltando-os no layout; excluir elementos arrastando-os e soltando-os na lixeira (na Caixa de Ferramentas), ou adicionar novos elementos arrastando-os da Caixa de Ferramentas e soltando-os no layout na posição desejada.'
	),
	'dropdownEditor'=>array(
		'default'	=> 'Há duas colunas mostradas a esquerda. A coluna da direita, rotulada como Layout Atual ou Previsualização de Layout, é onde você modifica o lyout do módulo. A coluna da esquerda, rotulada como Caixa de ferramentas, contém elementos úteis e ferramentas para você utilização na edição do layout.<br/><br/>Se a área de layout está rotulada como Layout Atual então você está trabalhando em uma cópia do layoutda tela atualmente utilizada pelo módulo.<br/><br/>Se está rotulada como Previsualização de Layout então você está trabalhando em uma cópia criada anteriormente através do botão Salvar, e já deve ter realizado alterações a partir da versão visualizada pelos usuários no módulo.',
		'dropdownaddbtn'=> 'Clicando neste botão irá adicionar um novo item ao dropdown.',

	),
	'exportcustom'=>array(
	    'exportHelp'=>'Personalizações feitas no Studio desta instância podem ser empacotadas e implantadas em uma outra instância.<br><br>Informe um <b>Nome de Pacote</b>. Voce pode informar também o <b>Autor</b> e a <b>Descrição</b> do pacote.<br><br>Selecione o(s) módulo(s) que contém as personalizações para exportar. (Somente módulos contendo personalizações irão aparecer para você selecionar.)<br><br>Clique <b>Exportar</b> para criar um arquivo .zip para o pacote contendo as personalizações. O arquivo .zip pode ser carregado em outra instância através do <b>Carregador de Módulos</b>.',
	    'exportCustomBtn'=>'Clique <b>Exportar</b> para criar um arquivo .zip para o pacote contendo as personalizações que você gostaria de exportar.
',
	    'name'=>'O <b>Nome</b> do pacote será mostrado no Carregador de Módulos depois que um pacote é carregado para instalação no Studio.',
	    'author'=>'O <b>Autor</b> é o nome da entidade que criou o pacote. O autor pode ser uma pessoa ou um empresa.<br><br>O Autor será mostrado no Carregador de Módulos depois que um pacote é carregado para instalação no Studio.
',
	    'description'=>'A <b>Descrição</b> do pacote será mostrada no Carregador de Módulos depois que um pacote é carregado para instalação no Studio.',
	),
	'studioWizard'=>array(
		'mainHelp' 	=> 'Bem vindo a área de <b>Ferramentas do Desenvolvedor</b>. <br/><br/>Use as ferramentas desta área para criar e gerenciar módulos padrão, módulos personalizados e campos.',
		'studioBtn'	=> 'Use o <b>Studio</b> para personalizar módulos instalados, através da modificação da distribução de campos, selecionando que campos estarão disponíveis e criando campos personalizados.',
		'mbBtn'		=> 'Use o <b>Construtor de Módulos</b> para criar novos módulos.',
		'appBtn' 	=> 'Use o Modo de Aplicação para personalizar várias propriedades do programa, tais como quantos relatórios TPS serão exibidos na página inicial.',
		'backBtn'	=> 'Retornar ao passo anterior.',
		'studioHelp'=> 'Use o <b>Studio</b> para personalizar módulos instalados.',
		'moduleBtn'	=> 'Clique para editar este módulo.',
		'moduleHelp'=> 'Selecione o componente do módulo que vpcê gostaria de editar.',
		'fieldsBtn'	=> 'Editar que informações serão armazenadas controlando os <b>Campos</b> no módulo.<br/><br/>Você pode editar e criar campos personalizados aqui.',
		'labelsBtn' => 'Clique <b>Salvar</b> para salvar seus rótulos personalizados.'	,
		'layoutsBtn'=> 'Customize os <b>Layouts</b> das telas de Edição, Detalhe, Listagem e Pesquisas.',
		'subpanelBtn'=> 'Editar que informações são exibidas nos supainéis dos módulos.',
		'layoutsHelp'=> 'Selecione um <b>Layout para Editar</b>.<br/<br/>Para modificar o layout que contém campos de dados para a entrada de dados, clique <b>Tela de Edição</b>.<br/><br/>Para modificar o layout que mostra os dados informados nos campos da Tela de Edição, clique <b>Tela de Detalhe</b>.<br/><br/>Para modificar o layout das colunas que aparecem na listagem padrão, clique <b>Tela de Listagem</b>.<br/><br/>Para modificar o layout dos fdormulários das telas de Pesquisa Básica e Avançada, clique <b>Pesquisa</b>.',
		'subpanelHelp'=> 'Selecione um <b>Subpainel</b> para editar.',
		'searchHelp' => 'Selecione uma <b>Pesquisa</b> para editar.',
		'labelsBtn'	=> 'Editar os <b>Rótulos</b> mostrados para os valores neste módulos.',
        'newPackage'=>'Clique <b>Novo Pacote</b> para criar um novo pacote.',
        'mbHelp'    => '<b>Bem vindo ao Construtor de Módulos.</b><br/><br/>Use o <b>Construtor de Módulos</b> para criar pacotes contendo módulos personalizados baseados em objetos padrão ou personalizados. <br/><br/>Para começar, clique <b>Novo Pacote</b> para criar um novo pacote, ou selecione um pacote para editar.<br/><br/> Um <b>pacote</b> é como um recipiente para módulos personalizados, todos eles como parte de um projeto. O pacote pode conter um ou mais módulos personalizados que podem ser relacionados entre sí ou com os módulos padrão do sistema. <br/><br/>Exemplos: Voce pode quere criar um pacote contendo um módulo personalizado que está relacionado com o módulo padrão Contas. Ou, você pode querer criar um pacote contendo diversos módulos personalizados, que trabalham em conjunto como um projeto e que são relacionados entre sí e aos módulos da aplicação.',
        'exportBtn' => 'Clique <b>Exportar Personalizações</b> para criar um pacote contendo as personalizações feitas no Studio para módulos específicos.',
	),


),
//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'Editor de Dropdown',

//ASSISTANT
'LBL_AS_SHOW' => 'Mostrar o Assitente no futuro.',
'LBL_AS_IGNORE' => 'Ignorar o Assitente no futuro.',
'LBL_AS_SAYS' => 'O Assistente diz:',


//STUDIO2
'LBL_MODULEBUILDER'=>'Construtor de Módulos',
'LBL_STUDIO' => 'Studio',
'LBL_DROPDOWNEDITOR' => 'Editor de Dropdown',
'LBL_EDIT_DROPDOWN'=>'Editar Dropdown',
'LBL_DEVELOPER_TOOLS' => 'Ferramentas do Desenvolvedor',
'LBL_SUGARPORTAL' => 'Editor do Sugar Portal',
'LBL_SYNCPORTAL' => 'Sincronizar Portal',
'LBL_PACKAGE_LIST' => 'Listar Pacotes',
'LBL_HOME' => 'Principal',
'LBL_NONE'=>'-Nenhum-',
'LBL_DEPLOYE_COMPLETE'=>'Implantação Concluída',
'LBL_DEPLOY_FAILED'   =>'Ocorreu um erro durante o processo de implantação. Seu pacote pode não ter sido instalado corretamente.',
'LBL_ADD_FIELDS'=>'Aicionar Campos Personalizados',
'LBL_AVAILABLE_SUBPANELS'=>'Subpainéis Disponíveis',
'LBL_ADVANCED'=>'Avançada',
'LBL_ADVANCED_SEARCH'=>'Pesquisa Avançada',
'LBL_BASIC'=>'Básica',
'LBL_BASIC_SEARCH'=>'Pesquisa Básica',
'LBL_CURRENT_LAYOUT'=>'Layout',
'LBL_CURRENCY' => 'Moeda',
'LBL_CUSTOM' => 'Personalizado',
'LBL_DASHLET'=>'Sugar Dashlet',
'LBL_DASHLETLISTVIEW'=>'Sugar Dashlet - Listagem',
'LBL_DASHLETSEARCH'=>'Sugar Dashlet - Pesquisa',
'LBL_POPUP'=>'Popup',
'LBL_POPUPLIST'=>'Popup - Listagem',
'LBL_POPUPLISTVIEW'=>'Popup - Listagem',
'LBL_POPUPSEARCH'=>'Popup - Pesquisa',
'LBL_DASHLETSEARCHVIEW'=>'Sugar Dashlet - Pesquisa',
'LBL_DISPLAY_HTML'=>'Mostrar Código HTML',
'LBL_DETAILVIEW'=>'Tela de Detalhe',
'LBL_DROP_HERE' => '[Soltar Aqui]',
'LBL_EDIT'=>'Editar',
'LBL_EDIT_LAYOUT'=>'Editar Layout',
'LBL_EDIT_ROWS'=>'Editar Linhas',
'LBL_EDIT_COLUMNS'=>'Editar Colunas',
'LBL_EDIT_LABELS'=>'Editar Rótulos',
'LBL_EDIT_FIELDS'=>'Editar Campos Personalizados',
'LBL_EDIT_PORTAL'=>'Editar Portal para ',
'LBL_EDIT_FIELDS'=>'Editar Campos',
'LBL_EDITVIEW'=>'Tela de Edição',
'LBL_FILLER'=>'(enchimento)',
'LBL_FIELDS'=>'Campos',
'LBL_FAILED_TO_SAVE' => 'Falha ao Salvar',
'LBL_FAILED_PUBLISHED' => 'Falha ao Publicar',
'LBL_HOMEPAGE_PREFIX' => 'Meu',
'LBL_LAYOUT_PREVIEW'=>'Previsualização de Layout',
'LBL_LAYOUTS'=>'Layouts',
'LBL_LISTVIEW'=>'Tela de Listagem',
'LBL_MODULES'=>'Módulos',
'LBL_MODULE_TITLE' => 'Studio',
'LBL_NEW_PACKAGE' => 'Novo Pacote',
'LBL_NEW_PANEL'=>'Novo Painel',
'LBL_NEW_ROW'=>'Nova Linha',
'LBL_PACKAGE_DELETED'=>'Pacote Excluído',
'LBL_PUBLISHING' => 'Publicando...',
'LBL_PUBLISHED' => 'Publicado',
'LBL_SELECT_FILE'=> 'Selecionar Arquivo',
'LBL_SAVE_LAYOUT'=> 'Salvar Layout',
'LBL_SELECT_A_SUBPANEL' => 'Selecione um Subpainel',
'LBL_SELECT_SUBPANEL' => 'Selecione um Subpainel',
'LBL_SUBPANELS' => 'Subpainéis',
'LBL_SUBPANEL' => 'Subpainel',
'LBL_SUBPANEL_TITLE' => 'Título:',
'LBL_SEARCH_FORMS' => 'Pesquisa',
'LBL_SEARCH'=>'Pesquisar',
'LBL_STAGING_AREA' => 'Área de Armazenamento Temporário (araste e solte itens aqui)',
'LBL_SUGAR_FIELDS_STAGE' => 'Campos Sugar (clique nos itens para adicionar à área de armazenamento temporário)',
'LBL_SUGAR_BIN_STAGE' => 'Lixeira Sugar (clique nos itens para adicionar à área de armazenamento temporário)',
'LBL_TOOLBOX' => 'Caixa de Ferramentas',
'LBL_VIEW_SUGAR_FIELDS' => 'Visualizar Campos Sugar',
'LBL_VIEW_SUGAR_BIN' => 'Visualizar Recipiente Sugar',
'LBL_QUICKCREATE' => 'Criação Rápida',
'LBL_EDIT_DROPDOWNS' => 'Editar um Dropdown Global',
'LBL_ADD_DROPDOWN' => 'Adicionar um novo Dropdown Global',
'LBL_BLANK' => '-vazio-',
'LBL_TAB_ORDER' => 'Ordem de Tabulação',
'LBL_TAB_PANELS' => 'Ativar Abas',
'LBL_TAB_PANELS_HELP' => 'Quando abas estão ativas, use o dropdown "tipo"<br />para cada seção para definir como ela será exibida (aba ou painel)',
'LBL_TABDEF_TYPE' => 'Modo de Exibição',
'LBL_TABDEF_TYPE_HELP' => 'Selecione como esta seção será exibida. Esta opção somente terá efeito se você ativou as abas nesta tela.',
'LBL_TABDEF_TYPE_OPTION_TAB' => 'Aba',
'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Painel',
'LBL_TABDEF_TYPE_OPTION_HELP' => 'Selecione Painel de ter este visor do painel de dentro da tela. Selecione Aba para ter este painel exibido dentro de uma aba separada dentro do layout. Quando Aba é especificado para um painel, painéis subsequentes estabelecidos para mostrar como o painel serão exibido na guia.<br/> Uma nova aba será iniciada para o próximo painel para a qual a Aba é selecionada. Se a Aba é selecionado para um painel abaixo do primeiro painel, o primeiro painel será necessariamente um Aba.',
'LBL_TABDEF_COLLAPSE' => 'Minimizar',
'LBL_TABDEF_COLLAPSE_HELP' => 'Selecione para tornar o estado padrão deste painel Minimizado.',
'LBL_DROPDOWN_TITLE_NAME' => 'Nome',
'LBL_DROPDOWN_LANGUAGE' => 'Idioma',
'LBL_DROPDOWN_ITEMS' => 'Lista de Itens',
'LBL_DROPDOWN_ITEM_NAME' => 'Nome do Item',
'LBL_DROPDOWN_ITEM_LABEL' => 'Rótulo de Exibição',
'LBL_SYNC_TO_DETAILVIEW' => 'Sincronizar para a Tela de Detalhe',
'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Selecione esta opção para sincronizar este layout de Tela de Edição para corresponder ao layout da Tela de Edição.<br />Campos e posições de campos serão sincronizados e salvos para a Tela de Edição automaticamente ao clicar em "Salvar" ou "Salvar e Implantar" na Tela de Edição.<br />Mudanças de layout não serão possíveis na Tela de Edição.',
'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Esta Tela de Detalhe está sincronizada com a Tela de Edição correspondente.<br />Campos e posições de campos nesta Tela de Detalhe refletem os campos e posições de campos na Tela de Edição.<br />Mudanças nesta Tela de Detalhe não podem ser salvas ou implantadas nesta página. Remova a sincronização de layout ou faça as modificações na Tela de Edição. ',
'LBL_COPY_FROM_EDITVIEW' => 'Copiar da Tela de Edição',
'LBL_DROPDOWN_BLANK_WARNING' => 'Valores são obrigatórios para ambos, Nome do Item e Rótulo de Exibição.<br />Para adicionar um item vazio, clique "Adicionar" sem ter informado nenhum valor para Nome do Item e Rótulo de Exibição.',
'LBL_DROPDOWN_KEY_EXISTS' => 'Esta Chave já existe na lista.',
'LBL_NO_SAVE_ACTION' => 'Não foi possível encontrar a ação "Salvar" para esta tela.',
'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: documento mal formado',



//RELATIONSHIPS
'LBL_MODULE' => 'Módulo',
'LBL_LHS_MODULE'=>'Módulo Primário',
'LBL_CUSTOM_RELATIONSHIPS' => '* Relacionamento criado no Studio',
'LBL_RELATIONSHIPS'=>'Relacionamentos',
'LBL_RELATIONSHIP_EDIT' => 'Editar Relacionamento',
'LBL_REL_NAME' => 'Nome',
'LBL_REL_LABEL' => 'Rótulo',
'LBL_REL_TYPE' => 'Tipo',
'LBL_RHS_MODULE'=>'Módulo Relacionado',
'LBL_NO_RELS' => 'Nenhum Relacionamento',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'Condição Opcional' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'Coluna',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'Valor',
'LBL_SUBPANEL_FROM'=>'Subpainel de',
'LBL_RELATIONSHIP_ONLY'=>'Elementos não visíveis serão criados para este relacionamento como não há uma relação visível pré-existente entre estes dois módulos.',
'LBL_ONETOONE' => 'UM para UM',
'LBL_ONETOMANY' => 'UM para MUITOS',
'LBL_MANYTOONE' => 'MUITOS para UM',
'LBL_MANYTOMANY' => 'MUITOS para MUITOS',


//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => 'Selecione uma função ou componente.',
'LBL_QUESTION_MODULE1' => 'Selecione um módulo.',
'LBL_QUESTION_EDIT' => 'Selecione um módulo para editar.',
'LBL_QUESTION_LAYOUT' => 'Selecione um layout para editar.',
'LBL_QUESTION_SUBPANEL' => 'Selecione um subpainel para editar.',
'LBL_QUESTION_SEARCH' => 'Selecione uma pesquisa para editar.',
'LBL_QUESTION_MODULE' => 'Selecione um componente do módulo para editar.',
'LBL_QUESTION_PACKAGE' => 'Selecione um pacote para editar, ou crie um novo pacote.',
'LBL_QUESTION_EDITOR' => 'Selecione uma ferramenta.',
'LBL_QUESTION_DROPDOWN' => 'Selecione um dropdown para editar, ou crie um novo dropdown.',
'LBL_QUESTION_DASHLET' => 'Selecione um dashlet para editar.',
'LBL_QUESTION_POPUP' => 'Selecione um popup para editar.',
//CUSTOM FIELDS
'LBL_RELATE_TO'=>'Relacionado a',
'LBL_NAME'=>'Nome',
'LBL_LABELS'=>'Rótulos',
'LBL_MASS_UPDATE'=>'Atualização em Massa',
'LBL_AUDITED'=>'Auditar',
'LBL_CUSTOM_MODULE'=>'Módulo',
'LBL_DEFAULT_VALUE'=>'Valor Padrão',
'LBL_REQUIRED'=>'Obrigatório',
'LBL_DATA_TYPE'=>'Tipo',
'LBL_HCUSTOM'=>'PERSONALIZADO',
'LBL_HDEFAULT'=>'PADRÃO',
'LBL_LANGUAGE'=>'Idioma:',
'LBL_CUSTOM_FIELDS' => '* campo criado no Studio',

//SECTION
'LBL_SECTION_EDLABELS' => 'Editar Rótulos',
'LBL_SECTION_PACKAGES' => 'Pacotes',
'LBL_SECTION_PACKAGE' => 'Pacote',
'LBL_SECTION_MODULES' => 'Módulos',
'LBL_SECTION_PORTAL' => 'Portal',
'LBL_SECTION_DROPDOWNS' => 'Dropdowns',
'LBL_SECTION_PROPERTIES' => 'Propriedades',
'LBL_SECTION_DROPDOWNED' => 'Editar Dropdown',
'LBL_SECTION_HELP' => 'Ajuda',
'LBL_SECTION_ACTION' => 'Ação',
'LBL_SECTION_MAIN' => 'Principal',
'LBL_SECTION_EDPANELLABEL' => 'Editar Rótulo do Painel',
'LBL_SECTION_FIELDEDITOR' => 'Editar Campo',
'LBL_SECTION_DEPLOY' => 'Implantar',
'LBL_SECTION_MODULE' => 'Módulo',
'LBL_SECTION_VISIBILITY_EDITOR'=>'Editar Visibilidade',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Padrão',
'LBL_HIDDEN'=>'Oculto',
'LBL_AVAILABLE'=>'Disponível',
'LBL_LISTVIEW_DESCRIPTION'=>'Há três colunas mostradas abaixo.<br />A coluna <b>Padrão</b> contém os campos que são mostrados na Tela de Listagem por padrão.<br /> A coluna<b>Adicionais</b> contém os campos que o usuário pode escolher para criar uma busca personalizada.<br />A coluna <b>Disponíveis</b> mostra os campos disponíveis para você como Administrador para adicionar às colunas <b>Padrão</b> e <b>Disponíveis</b> para serem usados pelos Usuários.',
'LBL_LISTVIEW_EDIT'=>'Editor da Tela de Listagem',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Previsualizar',
'LBL_MB_RESTORE'=>'Restaurar',
'LBL_MB_DELETE'=>'Excluir',
'LBL_MB_COMPARE'=>'Comparar',
'LBL_MB_DEFAULT_LAYOUT'=>'Layout Padrão',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'Adicionar',
'LBL_BTN_SAVE'=>'Salvar',
'LBL_BTN_SAVE_CHANGES'=>'Salvar Alterações',
'LBL_BTN_DONT_SAVE'=>'Descartar Alterações',
'LBL_BTN_CANCEL'=>'Cancelar',
'LBL_BTN_CLOSE'=>'Fechar',
'LBL_BTN_SAVEPUBLISH'=>'Salvar e Implantar',
'LBL_BTN_NEXT'=>'Próximo',
'LBL_BTN_BACK'=>'Anterior',
'LBL_BTN_CLONE'=>'Clonar',
'LBL_BTN_ADDCOLS'=>'Adicionar Colunas',
'LBL_BTN_ADDROWS'=>'Adicionar Linhas',
'LBL_BTN_ADDFIELD'=>'Adicionar Campo',
'LBL_BTN_ADDDROPDOWN'=>'Adicionar Dropdown',
'LBL_BTN_SORT_ASCENDING'=>'Ordenação Ascendente',
'LBL_BTN_SORT_DESCENDING'=>'Ordenação Descendente',
'LBL_BTN_EDLABELS'=>'Editar Rótulos',
'LBL_BTN_UNDO'=>'Desfazer',
'LBL_BTN_REDO'=>'Refazer',
'LBL_BTN_ADDCUSTOMFIELD'=>'Adicionar Campo Personalizado',
'LBL_BTN_EXPORT'=>'Exportar Personalizações',
'LBL_BTN_DUPLICATE'=>'Duplicar',
'LBL_BTN_PUBLISH'=>'Publicar',
'LBL_BTN_DEPLOY'=>'Implantar',
'LBL_BTN_EXP'=>'Exportar',
'LBL_BTN_DELETE'=>'Excluir',
'LBL_BTN_VIEW_LAYOUTS'=>'Visualizar Layouts',
'LBL_BTN_VIEW_FIELDS'=>'Visualizar Campos',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'Visualizar Relacionamentos',
'LBL_BTN_ADD_RELATIONSHIP'=>'Add Relacionamentos',
'LBL_BTN_RENAME_MODULE' => 'Alterar Nome do Módulo',
'LBL_BTN_INSERT'=>'Inserir',
//TABS


//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Erro: O Campo já existe.',
'ERROR_INVALID_KEY_VALUE'=> "Erro: Valor Vhave Inválido: [']",
'ERROR_NO_HISTORY' => 'Nenhum arquivo de histórico encontrado.',
'ERROR_MINIMUM_FIELDS' => 'O layout deve conter pelo menos um campo.',
'ERROR_GENERIC_TITLE' => 'Ocorreu um erro.',
'ERROR_REQUIRED_FIELDS' => 'Você está certo que quer continuar? Os seguintes campos obrigatórios estão faltando no layout: ',
'ERROR_ARE_YOU_SURE' => 'Você está certo que quer continuar?',



//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'Nome do Pacote:',
'LBL_MODULE_NAME'=>'Nome do Módulo:',
'LBL_AUTHOR'=>'Autor:',
'LBL_DESCRIPTION'=>'Descrição:',
'LBL_KEY'=>'Chave:',
'LBL_ADD_README'=>' Leia-me',
'LBL_MODULES'=>'Módulos:',
'LBL_LAST_MODIFIED'=>'Última Modificação:',
'LBL_NEW_MODULE'=>'Novo Módulo',
'LBL_LABEL'=>'Rótulo:',
'LBL_LABEL_TITLE'=>'Rótulo',
'LBL_WIDTH'=>'Largura',
'LBL_PACKAGE'=>'Pacote:',
'LBL_TYPE'=>'Tipo:',
'LBL_TEAM_SECURITY'=>'Segurança de Equipes',
'LBL_ASSIGNABLE'=>'Atribuível',
'LBL_PERSON'=>'Pessoa',
'LBL_COMPANY'=>'Empresa',
'LBL_ISSUE'=>'Questão',
'LBL_SALE'=>'Venda',
'LBL_FILE'=>'Arquivo',
'LBL_NAV_TAB'=>'Aba de Navegação',
'LBL_CREATE'=>'Criar',
'LBL_LIST'=>'Listar',
'LBL_VIEW'=>'Visualizar',
'LBL_LIST_VIEW'=>'Tela de Listagem',
'LBL_HISTORY'=>'Visualizar Histórico',
'LBL_RESTORE_DEFAULT'=>'Restaurar Padrão',
'LBL_ACTIVITIES'=>'Atividades',
'LBL_SEARCH'=>'Pesquisar',
'LBL_NEW'=>'Novo',
'LBL_TYPE_BASIC'=>'básico',
'LBL_TYPE_COMPANY'=>'empresa',
'LBL_TYPE_PERSON'=>'pessoa',
'LBL_TYPE_ISSUE'=>'questão',
'LBL_TYPE_SALE'=>'venda',
'LBL_TYPE_FILE'=>'arquivo',
'LBL_RSUB'=>'Este é o subpainel que será exibido em seu módulo.',
'LBL_MSUB'=>'Este é o subpainel que seu módulo irá prover aos módulos relacionados para exibição de dados.',
'LBL_MB_IMPORTABLE'=>'Importando',

// VISIBILITY EDITOR
'LBL_VE_VISIBLE'=>'visível',
'LBL_VE_HIDDEN'=>'oculto',
'LBL_PACKAGE_WAS_DELETED'=>'[[package]] foi excluído.',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'Exportar Personalizações',
'LBL_EC_NAME'=>'Nome do Pacote:',
'LBL_EC_AUTHOR'=>'Autor:',
'LBL_EC_DESCRIPTION'=>'Descrição:',
'LBL_EC_KEY'=>'Chave:',
'LBL_EC_CHECKERROR'=>'Por favor, selecione um módulo.',
'LBL_EC_CUSTOMFIELD'=>'campo(s) personalizado(s)',
'LBL_EC_CUSTOMLAYOUT'=>'layout(s) personalizado(s)',
'LBL_EC_NOCUSTOM'=>'Nenhum módulo foi personalizado.',
'LBL_EC_EMPTYCUSTOM'=>'não tem personalizações.',
'LBL_EC_EXPORTBTN'=>'Exportar',
'LBL_MODULE_DEPLOYED' => 'O Módulo foi implantado.',
'LBL_UNDEFINED' => 'indefinido',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => 'Falha ao recuperar os dados.',
'LBL_AJAX_TIME_DEPENDENT' => 'Uma ação que depende de tempo está em progresso. Por favor, aguarde e tente novamente em alguns instantes.',
'LBL_AJAX_LOADING' => 'Carregando...',
'LBL_AJAX_DELETING' => 'Excluindo...',
'LBL_AJAX_BUILDPROGRESS' => 'Compilação em Progresso...',
'LBL_AJAX_DEPLOYPROGRESS' => 'Implantação em Progresso...',
'LBL_AJAX_FIELD_EXISTS' =>'O nome de campo que você informou já existe. Por favor informe outro nome para o campo.',
//JS
'LBL_JS_REMOVE_PACKAGE' => 'Você está certo que quer remover este pacote? Isto irá excluir permanentemente todos os arquivos associados a este pacote.',
'LBL_JS_REMOVE_MODULE' => 'Você está certo que quer remover este módulo? Isto irá excluir permanentemente todos os arquivos associados a este módulo.',
'LBL_JS_DEPLOY_PACKAGE' => 'Qualquer personalização que você tenha feito através do Studio será sobrescrita quando este módulo for reimplantado. Você está certo que quer continuar?',

'LBL_DEPLOY_IN_PROGRESS' => 'Implantando Pacote',
'LBL_JS_VALIDATE_NAME'=>'Nome - Deve ser alfanumérico, começar com uma letra e não pode conter espaços.',
'LBL_JS_VALIDATE_PACKAGE_NAME'=>'O Nome de Pacote já existe.',
'LBL_JS_VALIDATE_KEY'=>'Chave - Deve ser alfanumérica, começar com uma letra e não pode conter espaços.',
'LBL_JS_VALIDATE_LABEL'=>'Por favor, informe o Rótulo que será usado como Nome de Exibição para este Módulo.',
'LBL_JS_VALIDATE_TYPE'=>'Por favor, selecione o tipo de módulo que você quer construir a partir da lista acima.',
'LBL_JS_VALIDATE_REL_NAME'=>'Nome - Deve ser alfanumérico e não pode conter espaços.',
'LBL_JS_VALIDATE_REL_LABEL'=>'Rótulo - por favor, adicione o rótulo que será mostrado acima do subpainel.',

//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>"Excluindo este campo personalizado irá excluir ambos, o campo personalizado e os dados relacionados ao campo no banco de dados. O campo não será mais aparecer em qualquer tela do módulo."
		. "\\n\\nVocê quer continuar?",
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'Você está certo quer excluir este relacionamento?',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'Isto irá tornar este relacionamento permanente. Você está certo que quer implantar este relacionamento?',
'LBL_CONFIRM_DONT_SAVE' => 'Alterações foram feitas desde que você salvou pela última vez. Você gostaria de salvar?',
'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Salvar Alterações?',
'LBL_CONFIRM_LOWER_LENGTH' => 'Dados podem ser truncados e isto não pode ser desfeito. Você está certo que quer continuar?',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'Selecione o tipo de dado apropriado baseado no tipo de dado que será informado para este campo.',
'LBL_POPHELP_SEARCHABLE'=>'Selecione o nível de impulso para este campo.<br />Aos campos assinalados com um maior nível de impulso será dado um peso maior quando a pesquisa é realizada.<br />Quando uma pesquisa é realizada, os registros que contêm campos com um peso maior irão aparecer mais nos resultados da pesquisa.<br />Se você alterar o nível de impulso para um campo de um nível para outro, realize uma indexação do sistema para aplicar a alteração.<br/> Certifique-se de optar por apagar os dados existentes no momento em que a indexação do sistema é realizada.',
'LBL_POPHELP_IMPORTABLE'=>'<b>Sim</b>: O campo será incluído em uma operação de importação.<br><b>Não</b>: O campo não será incluído em uma operação de importação.<br><b>Obrigatório</b>: Um valor para este campo deverá ser informado para qualquer importação realizada.',
'LBL_POPHELP_IMAGE_WIDTH'=>'Informe um valor numérico para a Largura, medida em pixels.<br> A imagem carregada será escalada para esta Largura.',
'LBL_POPHELP_IMAGE_HEIGHT'=>'Informe um valor numérico para a Altura, medida em pixels.<br> A imagem carregada será escalada para esta Altura.',
'LBL_POPHELP_DUPLICATE_MERGE'=>'<b>Ativado</b>: O campo irá aparecer na tela de Mesclar Duplicados, mas não estará disponível para ser usado em condições de filtros na tela Procurar Duplicados.<br><b>Desativado</b>: O campo não irá aparecer na tela de Mesclar Duplicados, e também não estará disponível para ser usado em condições de filtros na tela Procurar Duplicados.'
,
'LBL_POPHELP_GLOBAL_SEARCH'=>'Selecione para usar este campo quando pesquisar por registros usando a Pesquisa Global neste módulo.',
//Revert Module labels
'LBL_RESET' => 'Redefinir',
'LBL_RESET_MODULE' => 'Redefinir Módulo',
'LBL_REMOVE_CUSTOM' => 'Remover Personalizações',
'LBL_CLEAR_RELATIONSHIPS' => 'Limpar Relacionamentos',
'LBL_RESET_LABELS' => 'Redefinir Rótulos',
'LBL_RESET_LAYOUTS' => 'Redefinir Layouts"',
'LBL_REMOVE_FIELDS' => 'Remover Campos Personalizados',
'LBL_CLEAR_EXTENSIONS' => 'Limpar Extensões',
'LBL_CLEAR_EXTENSIONS' => 'Limpar Extensões',



'LBL_HISTORY_TIMESTAMP' => 'Carimbo de Hora (timestamp)',
'LBL_HISTORY_TITLE' => ' histórico',

'fieldTypes' => array(
				'varchar'=>'Campo Texto',
				'int'=>'Inteiro',
				'float'=>'Float',
				'bool'=>'Checkbox',
				'enum'=>'Dropdown',
				'multienum' => 'Multi-Seleção',
                'date'=>'Data',
                'phone' => 'Telefone',
                'currency' => 'Moeda',
                'html' => 'HTML',
                'radioenum' => 'Radio',
                'relate' => 'Relacionado',
                'address' => 'Endereço',
                'text' => 'Área de Texto',
                'url' => 'URL',
                'iframe' => 'IFrame',
                'datetimecombo' =>'Data e Hora',
				'decimal'=>'Decimal',
),
'labelTypes' => array(
    "" => "Rótulos mais utilizados",
	"all" => "Todos os Rótulos",
),

'parent' => 'Relacionamento Flexível',

'LBL_ILLEGAL_FIELD_VALUE' =>"A chave do Dropdown não pode conter aspas.",
'LBL_CONFIRM_SAVE_DROPDOWN' =>"Você está selecionando este item para revover da lista do Dropdown. Quaisquer campos Dropdown usando esta lista com este item como valor não irá mostrá-lo mais, e o valor não estará mais disponível para ser selecionado a partir do Dropdown dos campos. Você está certo que quer continuar?",
'LBL_POPHELP_VALIDATE_US_PHONE'=>"Selecione para validar este campo para digitação <br>de um número de telefone de 10 dígitos," .
					             "com espaço reservado para o código de país 1, e<br>" .
                                 "para aplicar o formato U.S.A. de núemro de telefone quando um registro<br>" .
                                 "for salvo. O seguinte formato será aplicado: (xxx) xxx-xxxx.",
'LBL_ALL_MODULES'=>'Todos os Módulos',
'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (relacionado a {1} ID)',
);

