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
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): Vanio Vieira (vvanio@yahoo.com.br).
 ********************************************************************************/

$mod_strings = array (
  'LBL_MODULE_NAME' => 'Principal',
  'LBL_MODULES_TO_SEARCH' => 'Módulos para Pesquisar',
  'LBL_NEW_FORM_TITLE' => 'Novo Contato',
  'LBL_FIRST_NAME' => 'Nome:',
  'LBL_LAST_NAME' => 'Sobrenome:',
  'LBL_LIST_LAST_NAME' => 'Sobrenome',
  'LBL_PHONE' => 'Telefone:',
  'LBL_EMAIL_ADDRESS' => 'Endereço de E-mail:',
  'LBL_MY_PIPELINE_FORM_TITLE' => 'Meu Pipeline',
  'LBL_PIPELINE_FORM_TITLE' => 'Pipeline por Estágio de Vendas',
  'LBL_CAMPAIGN_ROI_FORM_TITLE' => 'ROI de Campanha',
  'LBL_MY_CLOSED_OPPORTUNITIES_GAUGE' => 'Minhas Oportunidades Ganhas (Gauge)',
  'LNK_NEW_CONTACT' => 'Criar Contato',
  'LNK_NEW_ACCOUNT' => 'Criar Conta',
  'LNK_NEW_OPPORTUNITY' => 'Criar Oportunidade',
  'LNK_NEW_LEAD' => 'Criar Lead',
  'LNK_NEW_CASE' => 'Criar Ocorrência',
  'LNK_NEW_NOTE' => 'Criar Anotação ou Anexo',
  'LNK_NEW_CALL' => 'Registrar Chamada',
  'LNK_NEW_EMAIL' => 'Arquivar E-mail',
  'LNK_COMPOSE_EMAIL' => 'Redigir E-mail',
  'LNK_NEW_MEETING' => 'Agendar Reunião',
  'LNK_NEW_TASK' => 'Criar Tarefa',
  'LNK_NEW_BUG' => 'Reportar Bug',
  'LBL_ADD_BUSINESSCARD' => 'Informar o Cartão de Visitas',
  'ERR_ONE_CHAR' => 'Por favor, informe ao menos uma letra ou número para sua pesquisa...',
  'LBL_OPEN_TASKS' => 'Minhas Tarefas Abertas',
  'LBL_SEARCH_RESULTS' => 'Resultados da Pesquisa',
  'LBL_SEARCH_RESULTS_IN' => 'em',
  'LNK_NEW_SEND_EMAIL' => 'Redigir E-mail',
  'LBL_NO_ACCESS' => 'Você não tem acesso a esta área. Contate seu Administrador do Sistema para obter acesso',
  'LBL_NO_RESULTS_IN_MODULE' => '-- Nenhum Resultado --',
  'LBL_NO_RESULTS' => '<h2>Nenhum resultado foi encontrado. Por favor, pesquise novamente.</h2><br>',
  'LBL_NO_RESULTS_TIPS' => '<h3>Dicas de Pesquisa:</h3><ul><li>Certifique-se de ter a selecionado as categorias apropriadas acima.</li><li>Melhore seus critérios de pesquisa.</li><li>Se você ainda não encontrar nenhum resultado, tente a opção Pesquisa Avançada.</li></ul>',

  'LBL_RELOAD_PAGE' => 'Por favro, <a href="javascript: window.location.reload()">recarregue esta janela</a> para utilizar este Sugar Dashlet.',
  'LBL_ADD_DASHLETS' => 'Adicionar Sugar Dashlets',
  'LBL_ADD_PAGE' => 'Aidiconar Página',
  'LBL_DEL_PAGE' => 'Excluir Página',
  'LBL_WEBSITE_TITLE' => 'Website',
  'LBL_RSS_TITLE' => 'Feed de Notícias',
  'LBL_DELETE_PAGE' => 'Excluir Página',
  'LBL_CHANGE_LAYOUT' => 'Mudar Layout',
  'LBL_RENAME_PAGE' => 'Renomear Páginas',
  'LBL_CLOSE_DASHLETS' => 'Fechar',
  'LBL_CLOSE_SITEMAP' => 'Fechar',
  'LBL_OPTIONS' => 'Opções',
  // dashlet search fields
  'LBL_TODAY'=>'Hoje',
  'LBL_YESTERDAY' => 'Ontem',
  'LBL_TOMORROW'=>'Amanhã',
  'LBL_LAST_WEEK'=>'Última Semana',
  'LBL_NEXT_WEEK'=>'Próxima Semana',
  'LBL_LAST_7_DAYS'=>'Últimos 7 Dias',
  'LBL_NEXT_7_DAYS'=>'Próximos 7 Dias',
  'LBL_LAST_MONTH'=>'Último Mês',
  'LBL_NEXT_MONTH'=>'Próximo Mês',
  'LBL_LAST_QUARTER'=>'Último Trimestre',
  'LBL_THIS_QUARTER'=>'Este Trimestre',
  'LBL_LAST_YEAR'=>'Último Ano',
  'LBL_NEXT_YEAR'=>'Próximo Ano',
  'LBL_LAST_30_DAYS' => 'Últimos 30 Dias',
  'LBL_NEXT_30_DAYS' => 'Próximos 30 Dias',
  'LBL_THIS_MONTH' => 'Este Mês',
  'LBL_THIS_YEAR' => 'Este Ano',

  'LBL_MODULES' => 'Módulos',
  'LBL_CHARTS' => 'Gráficos',
  'LBL_TOOLS' => 'Ferramentas',
  'LBL_WEB' => 'Web',
  'LBL_SEARCH_RESULTS' => 'Resultados de Pesquisa',

  // Dashlet Categories
  'dashlet_categories_dom' => array(
      'Module Views' => 'Visualições de Módulos',
      'Portal' => 'Portal',
      'Charts' => 'Gráficos',
      'Tools' => 'Ferramentas',
      'Miscellaneous' => 'Diversos'),
  'LBL_MAX_DASHLETS_REACHED' => 'Você alcançou o número máximo de Sugar Dashlets que seu Administrador definiu. Por favor, remova um Sugar Dashlet antes de adicionar um novo.',
  'LBL_ADDING_DASHLET' => 'Adicionando Sugar Dashlet ...',
  'LBL_ADDED_DASHLET' => 'Sugar Dashlet Adicionado',
  'LBL_REMOVE_DASHLET_CONFIRM' => 'Você está certo que quer excluir este Sugar Dashlet?',
  'LBL_REMOVING_DASHLET' => 'Removendo Sugar Dashlet ...',
  'LBL_REMOVED_DASHLET' => 'Sugar Dashlet Removido',
  'LBL_DASHLET_CONFIGURE_GENERAL' => 'Geral',
  'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtros',
  'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Somente meus Itens',
  'LBL_DASHLET_CONFIGURE_TITLE' => 'Título',
  'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Mostrar Linhas',

  'LBL_DASHLET_DELETE' => 'Excluir Sugar Dashlet',
  'LBL_DASHLET_REFRESH' => 'Atualizar Sugar Dashlet',
  'LBL_DASHLET_EDIT' => 'Editar Sugar Dashlet',

  'LBL_TRAINING_TITLE' => 'Treinamento',

  'LBL_CREATING_NEW_PAGE' => 'Criando Nova Página...',
  'LBL_NEW_PAGE_FEEDBACK' => 'Você criou uma nova página. Você pode adicionar novo conteúdo pela opção Adicionar Sugar Dashlets.',
  'LBL_DELETE_PAGE_CONFIRM' => 'Você está certo que quer excluir esta Página?',
  'LBL_SAVING_PAGE_TITLE' => 'Salvando Título da Página...',
  'LBL_RETRIEVING_PAGE' => 'Recuperando Página...',

  // Default out-of-box names for tabs
  'LBL_HOME_PAGE_1_NAME' => 'Meu Sugar',
  'LBL_HOME_PAGE_2_NAME' => 'Vendas',
  'LBL_HOME_PAGE_3_NAME' => 'Suporte',
  'LBL_HOME_PAGE_6_NAME' => 'Marketing',//bug 16510, separate the support and marketing page from each other
  'LBL_HOME_PAGE_4_NAME' => 'Tracker',
  'LBL_CLOSE_SITEMAP' =>'Fechar',

  'LBL_SEARCH' => 'Pesquisar',
  'LBL_CLEAR' => 'Limpar',

  'LBL_BASIC_CHARTS' => 'Gráficos Básicos',
  'LBL_REPORT_CHARTS' => 'Relatórios Básicos',

  'LBL_MY_FAVORITE_REPORT_CHARTS' => 'Meus Relatórios Favoritos',
  'LBL_GLOBAL_REPORT_CHARTS' => 'Relatórios de Equipes Globais',
  'LBL_MY_TEAM_REPORT_CHARTS' => 'Meus Relatórios de Equipes',
  'LBL_MY_SAVED_REPORT_CHARTS' => 'Meus Relatórios Salvos',

  'LBL_DASHLET_SEARCH' => 'Localizar Dashlet',

//ABOUT page
  'LBL_VERSION' => 'Versão',
  'LBL_BUILD' => 'Compilação',


  'LBL_VIEWLICENSE_COM' => '<P>Este programa é um software livre; você pode redistribuí-lo e/ou modificá-lo sob os termos da <a href="LICENSE.txt" target="_blank" class="body"> GNU Affero General Public License versão 3</a> conforme publicada pela Free Software Foundation, mantendo a permissão adicional inclusa no cabeçalho do código fonte.</P>',
  'LBL_ADD_TERM_COM' => '<P>As interfaces de usuário interativas em versões de código fonte e objeto modificadas deste programa deverão indicar as observações legais apropriadas, como previsto na secção 5 da Licença GNU Affero General Public License versão 3. De acordo com a Seção 7 (b) da GNU General Public License versão 3, estas observações legais apropriadas devem manter a exibição do logotipo &quot;Powered by SugarCRM&quot;. Se a exibição do logotipo não é razoavelmente possível por razões técnicas, as observações legais apropriadas devem mostrar as palavras &quot;Powered by SugarCRM&quot;.</P>',


  'LBL_SUGAR_COMMUNITY_EDITION' => 'Sugar Community Edition',
  'LBL_SUGAR_PROFESSIONAL' => "Sugar Professional",
  'LBL_SUGAR_ENTERPRISE' => "Sugar Enterprise",
  'LBL_AND' => "e",
  'LBL_ARE' => "são",
  'LBL_TRADEMARKS' => 'marcas',
  'LBL_OF' => 'dos',
  'LBL_FOUNDERS' => 'Fundadores',
  'LBL_JOIN_SUGAR_COMMUNITY' => 'Junte-se a Comunidade Sugar',
  'LBL_DETAILS_SUGARFORGE' => 'Colabore e desenvolva extensões para o Sugar',
  'LBL_DETAILS_SUGAREXCHANGE' => 'Compre ou venda extensões certificadas do Sugar',
  'LBL_TRAINING' => 'Treinamento',
  'LBL_DETAILS_TRAINING' => 'Aprenda sobre o Sugar usando o conteúdo de treinamento on-line e interativo',
  'LBL_FORUMS' => 'Forums',
  'LBL_DETAILS_FORUMS' => 'Discuta Sugar com uma comunidade de usuários especialistas e desenvolvedores',
  'LBL_WIKI' => 'Wiki',
  'LBL_DETAILS_WIKI' => 'Pesquise a Base de Conhecimentos por tópicos de usuários e desenvolvedores',
  'LBL_DEVSITE' => 'Site do Desenvolvedor',
  'LBL_DETAILS_DEVSITE' => 'Descubra recursos, tutoriais e links úteis para agilizar seu aprendizado no desenvolvimento Sugar',
  'LBL_GET_SUGARCRM_RSS' => 'Obtenha o SugarCRM RSS',
  'LBL_SUGARCRM_NEWS' => 'Notícias do SugarCRM',
  'LBL_SUGARCRM_TRAINING_NEWS' => 'Notícias dos Treinamentos SugarCRM',
  'LBL_SUGARCRM_FORUMS' => 'SugarCRM Forums',
  'LBL_SUGARFORGE_NEWS' => 'Notícias do SugarForge',
  'LBL_ALL_NEWS' => 'Todas as Notícias',
  'LBL_LINK_CURRENT_CONTRIBUTORS' => 'Clique neste link para uma lista atual dos contribuidores Sugar!',
  'LBL_SOURCE_CODE' => 'Código Fonte',
  'LBL_SOURCE_SUGAR' => 'Sugar - O mais popular aplicativo de automação de força de vendas do mundo criado pela SugarCRM Inc.',
  'LBL_SOURCE_XTEMPLATE' => 'XTemplate - Um sistema de modelos (templates) para PHP criado por Barnabás Debreceni.',
  'LBL_SOURCE_NUSOAP' => 'NuSOAP - Um conjunto de classes PHP que possibilitam aos desenvolvedores criarem e consumirem web services, criado por NuSphere Corporation e Dietrich Ayala.',
  'LBL_SOURCE_JSCALENDAR' => 'JS Calendar - Um calendário para inserir datas criado por Mihai Bazon.',
  'LBL_SOURCE_PHPPDF' => 'PHP PDF - Uma biblioteca para criação de documentos PDF craiada por Wayne Munro.',
  'LBL_SOURCE_HTTP_WEBDAV_SERVER' => 'HTTP_WebDAV_Server - Um implmentação do WebDAV Server em PHP.',
  'LBL_SOURCE_PCLZIP' => 'PclZip - biblioteca que oferece funções para a compactação e extração de arquivos Zip criada por Vincent Blavet',
  'LBL_SOURCE_SMARTY' => 'Smarty - Um sistema de modelos (templates) para PHP.',
  'LBL_SOURCE_YAHOO_UI_LIB' => 'Yahoo! User Interface Library - A UI Library Utilities facilita a implementação de interfaces de usuário ricas (rich client-side).',
  'LBL_SOURCE_PHPMAILER' => 'PHPMailer - Uma classe de transferência de E-mail cheia de recursos para PHP.',
  'LBL_SOURCE_JSHRINK' => 'JShrink - Um minificador Javascript escrito em PHP.',
  'LBL_SOURCE_CRYPT_BLOWFISH' => 'Crypt_Blowfish - Permite a criptografia de duas vias Blowfish demaneira rápida e sem a necessidade da extensão MCrypt PHP.',
  'LBL_SOURCE_XML_HTMLSAX3' => 'XML_HTMLSax3 - Um parser SAX para HTML e outros documentos XML mal formados.',
  'LBL_SOURCE_YAHOO_UI_LIB_EXT' => 'Yahoo! UI Extensions Library - Extensões para o Yahoo! User Interface Library por Jack Slocum.',
  'LBL_SOURCE_SWFOBJECT' => 'SWFObject - Script Javascript de detecção e de incorporação do Flash Player.',
  'LBL_SOURCE_TINYMCE' => 'TinyMCE - Um editor WYSIWYG para navegadores da web que permite ao usuário editar conteúdo HTML.',
  'LBL_SOURCE_EXT' => 'Ext - Um framework JavaScript client-side para construir aplicações web.',
  'LBL_SOURCE_RECAPTCHA' => 'reCAPTCHA - Um serviço de CAPTCHA gratuito que ajuda a digitalizar livros, jornais e antigos programas de rádio.',
  'LBL_SOURCE_TCPDF' => 'TCPDF - Uma classe PHP class para geração de documentos PDF.',
  'LBL_SOURCE_CSSMIN' => 'CssMin - Um parser e minificador de css.',
  'LBL_SOURCE_PHPSAML' => 'PHP-SAML - Um kit de ferramentas SAML simples para PHP.',
  'LBL_SOURCE_ISCROLL' => 'iScroll - O webkit overflow:scroll para dispositivos móveis. Scrolling nativo dentro de um elemento de  largura/altura fixas.',
  'LBL_SOURCE_FLASHCANVAS' => 'FlashCanvas - FlashCanvas é uma biblioteca JavaScript que adiciona suporte HTML5 Canvas para o Internet Explorer. Ela renderiza formas e imagens via API do Flash. Ele suporta quase todos os APIs Canvas e, em muitos casos, roda mais rápido do que outras bibliotecas semelhantes que utilizam VML ou Silverlight.',
  'LBL_SOURCE_JIT' => 'JavaScript InfoVis Toolkit - oferece ferramentas para a criação de visualizações de dados interativos para a Web.',
  'LBL_SOURCE_ZEND' => 'Zend Framework - Um framework de aplicações web, open source e orientado a objetos para PHP5.',
  'LBL_SOURCE_PARSECSV' => 'parseCSV - um parser de dados CSV para PHP.',
  'LBL_SOURCE_PHPJS' => 'php.js - permite utilizar funções PHP no JavaScript.',
  'LBL_SOURCE_PHPSQL' => 'PHP SQL Parser',
  'LBL_SOURCE_HTMLPURIFIER' => 'HTML Purifier - Uma biblioteca de filtragem HTML standards-compliant.',
  'LBL_SOURCE_XHPROF' => 'XHProf - Um profiler hierárquico de nível de função para PHP.',
  'LBL_SOURCE_ELASTICA' => 'Elastica - Cliente PHP para o motor de distribuída ElasticSearch.',
  'LBL_SOURCE_FACEBOOKSDK' => 'Facebook PHP SDK',
  'LBL_SOURCE_JQUERY' => 'jQuery - jQuery é uma biblioteca JavaScript rápido, pequena e rica em recursos.',
  'LBL_SOURCE_JQUERY_UI' => 'jQuery UI - jQuery UI é um conjunto de interface do usuário com curadoria de interações, efeitos, widgets e temas construído em cima da Biblioteca JavaScript jQuery.',
  'LBL_SOURCE_OVERLIB' => 'OverlibMWS - A biblioteca overlibmws usa javascript para pop-ups DHTML que servem como auxiliares de informação e navegação para websites.',

  'LBL_DASHLET_TITLE' => 'Meus Sites',
  'LBL_DASHLET_OPT_TITLE' => 'Título',
  'LBL_DASHLET_INCORRECT_URL' => 'Localização incorreta do website especificado.',
  'LBL_DASHLET_OPT_URL' => 'Localização do Website',
  'LBL_DASHLET_OPT_HEIGHT' => 'Altura do Dashlet (em pixels)',
  'LBL_DASHLET_SUGAR_NEWS' => 'Novidades do Sugar',
  'LBL_DASHLET_DISCOVER_SUGAR_PRO' => 'Discover Sugar',
	'LBL_POWERED_BY_SUGAR' => 'Powered By SugarCRM' /*for 508 compliance fix*/,
	'LBL_MORE_DETAIL' => 'Mais Detalhes' /*for 508 compliance fix*/,
	'LBL_BASIC_SEARCH' => 'Pesquisa Básica' /*for 508 compliance fix*/,
	'LBL_ADVANCED_SEARCH' => 'Pesquisa Avançada' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Ícone Principal',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Volte rapidamente para sua Página Principal em um clique.',
    'LBL_TOUR_MODULES' => 'Módulos',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Todos os seus módulos importantes estão aqui.',
    'LBL_TOUR_MORE' => 'Mais Módulos',
    'LBL_TOUR_MORE_DESCRIPTION' => 'O restante de seus módulos estão aqui.',
    'LBL_TOUR_SEARCH' => 'Pesquisa Texto Completo (Full Text)',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'A Pesquisa ficou muito melhor!.',
    'LBL_TOUR_NOTIFICATIONS' => 'Notificações',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'Notificações do sistema vão aqui.',
    'LBL_TOUR_PROFILE' => 'Perfil',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Perfil de acesso, configurações e de logout.',
    'LBL_TOUR_QUICKCREATE' => 'Criação Rápida',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Criação rápida de registros sem trocar de tela.',
    'LBL_TOUR_FOOTER' => 'Rodapé expansível',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Expadir e minimizar rápidamente o rodapé.',
    'LBL_TOUR_CUSTOM' => 'Aplicativos Personalizados',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Integrações personalizadas podem entrar aqui.',
    'LBL_TOUR_BRAND' => 'Sua Marca',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Seu logotipo vai aqui. Você pode passar o mouse sobre ele para mis informações.',
    'LBL_TOUR_WELCOME' => 'Bem vindo ao Sugar',
    'LBL_TOUR_WATCH' => 'Veja o que há de novo no Sugar',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">Nova barra de navegação simplificada</li><li class="icon-ok">Novo rodapé expansível</li><li class="icon-ok">Melhoria na Pesquisa</li><li class="icon-ok">Menu de ações atualizado</li></ul><p>e muito mais!</p>',
    'LBL_TOUR_VISIT' => 'Para mais informações, por favor visite nosso sistema.',
    'LBL_TOUR_DONE' => 'Você está pronto!',
    'LBL_TOUR_REFERENCE_1' => 'Você pode sempre fazer referência a nossa',
    'LBL_TOUR_REFERENCE_2' => 'através do link "Suporte" na guia perfil.',
    'LNK_TOUR_DOCUMENTATION' => 'documentação',
    'LBL_TOUR_CALENDAR_URL_1' => 'Você compartilha sua Agenda SugarCRM com aplicativos de terceiros como o Microsoft Outlook ou Exchange? Se sim, você tem uma nova URL. Esta URL é mais segura e inclui um chave pessoal que vai prevenir publicações não autorizadas em sua agenda.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Recuperar a URL do seu novo calendário compartilhado.',

);


?>
