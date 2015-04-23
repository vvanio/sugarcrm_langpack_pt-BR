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
	/*'ADMIN_EXPORT_ONLY'=>'Somente Administradores podem Exportar',*/
	'ADVANCED'=>'Avançado',
	'DEFAULT_CURRENCY_ISO4217'=>'Código da Moeda ISO 4217',
	'DEFAULT_CURRENCY_NAME'=>'Nome da Moeda',
	'DEFAULT_CURRENCY_SYMBOL'=>'Símbolo da Moeda',
	'DEFAULT_CURRENCY'=>'Moeda Padrão',
	'DEFAULT_DATE_FORMAT'=>'Formato de Data Padrão',
	'DEFAULT_DECIMAL_SEP'					=>'Símbolo Decimal',
	'DEFAULT_LANGUAGE'=>'Idioma Padrão',
	'DEFAULT_NUMBER_GROUPING_SEP'			=> 'Separador de milhares (1000s)',
	'DEFAULT_SYSTEM_SETTINGS'=>'Interface do Usuário',
	'DEFAULT_THEME'=> 'Tema Padrão',
	'DEFAULT_TIME_FORMAT'=>'Formato de Hora Padrão',
/*	'DISABLE_EXPORT'=>'Desativar Exportação',*/
	'DISPLAY_RESPONSE_TIME'=>'Mostrar tempo de resposta do servidor',
	/*'EXPORT'=>'Exportação',
	'EXPORT_CHARSET' => 'Conjunto de Caracters Padrão para Exportação',
	'EXPORT_DELIMITER' => 'Delimitador de Exportação',*/
	'IMAGES'=>'Logotipos',
	'LBL_ADMIN_WIZARD' => 'Assistente de Administração',
	'LBL_ALLOW_USER_TABS' => 'Permitir que Usuários configurem Abas',
	'LBL_CONFIGURE_SETTINGS_TITLE' => 'Configuraçções do Sistema',
	'LBL_ENABLE_MAILMERGE' => 'Ativar o Mail Merge?',
	'LBL_LOGVIEW' => 'Visualizar Log',
	'LBL_MAIL_SMTPAUTH_REQ'				=> 'Utilizar Autenticação SMTP?',
	'LBL_MAIL_SMTPPASS'					=> 'Senha SMTP:',
	'LBL_MAIL_SMTPPORT'					=> 'Porta SMTP:',
	'LBL_MAIL_SMTPSERVER'				=> 'Servidor SMTP:',
	'LBL_MAIL_SMTPUSER'					=> 'Usuário SMTP:',
	'LBL_MAIL_SMTPTYPE'                => 'Tipo de servidor SMTP:',
	'LBL_MAIL_SMTP_SETTINGS'           => 'Especificação do Servidor SMTP',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Escolha seu provedor de E-mail:',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Senha Yahoo! Mail:',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'ID Yahoo! Mail:',
	'LBL_GMAIL_SMTPPASS'					=> 'Senha Gmail:',
	'LBL_GMAIL_SMTPUSER'					=> 'Endereço de E-mail Gmail:',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Senha Exchange:',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Usuário Exchange:',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Porta Servidor Exchange:',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Servidor Exchange:',
    'LBL_ALLOW_DEFAULT_SELECTION'           => 'Permitir que Usuários usem esta conta para enviar e-mail:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'Quando esta opção for selecionada, todos os Usuários serão capazes de enviar e-mails usando a mesma conta que o sistema usa para enviar notificações e alertas. Se a opção não for selecionada, os Usuários podem ainda utilizar o servidor de correio de saída depois que definirem suas próprias configurações de conta.',
	'LBL_MAILMERGE_DESC' => 'Esta opção deverá ser selecionada apenas se você tem o Sugar Plug-in for Microsoft&reg; Word&reg;.',
	'LBL_MAILMERGE' => 'Mail Merge',
	'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Intervalo Mínimo do Auto-Refresh de Dashlets',
	'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Este é o valor mínimo que pode ser escolhido para o auto-refresh dos dashlets. Definir para \'Nunca\' desativa o auto-refresh dos dashlets completamente.',
	'LBL_MODULE_FAVICON'               => 'Exibir ícone de módulo como favicon',
    'LBL_MODULE_FAVICON_HELP'   => 'Se você está num módulo com um ícone, utilize o ícone do módulo como favicon, em vez do favicon do tema, na aba do browser.',
	'LBL_MODULE_NAME'=>'Configurações do Sistema',
    'LBL_MODULE_ID'  => 'Configurador',
	'LBL_MODULE_TITLE'=>'Interface do Usuário',
	'LBL_NOTIFY_FROMADDRESS' => 'Endereço "De":',
	'LBL_NOTIFY_SUBJECT' => 'Assunto do E-mail:',
	'LBL_PORTAL_ON_DESC' => 'Permite que os usuários possam gerenciar informações de usuários de portal nos registros de contatos. usuários de Portal podem acessar Ocorrências, Bugs, artigos de Base de Conhecimentos e outros dados através do Portal de Self-Service.',
	'LBL_PORTAL_ON' => 'Ativar Gerenciamento de Usuários de Portal',
	'LBL_PORTAL_TITLE' => 'Portal de Self-Service do Cliente',
	'LBL_PROXY_AUTH' => 'Autenticação?',
	'LBL_PROXY_HOST' => 'Host do Proxy',
	'LBL_PROXY_ON_DESC' => 'Configurar o endereço do host do proxy e definições de autenticação',
	'LBL_PROXY_ON' => 'Utilizar um host do proxy?',
	'LBL_PROXY_PASSWORD' => 'Senha',
	'LBL_PROXY_PORT' => 'Porta',
	'LBL_PROXY_TITLE' => 'Configurações de Proxy',
	'LBL_PROXY_USERNAME' => 'Nome de Usuário',
	'LBL_RESTORE_BUTTON_LABEL' => 'Restaurar',
	'LBL_SYSTEM_SETTINGS' => 'Configurações de Sistema',
	'LBL_SKYPEOUT_ON_DESC' => 'Permite que os usuários cliquem em números de telefone para chama usando o SkypeOut&reg;. Os números devem estar formatados corretamente para utilizar este recurso.<br>O formato deve ser: "+" "Código do Pais" "Número do Telefone"<br>Exemplo: +1 (555) 555-1234.',
	'LBL_SKYPEOUT_ON' => 'Ativar a Integração com SkypeOut&reg;?',
	'LBL_SKYPEOUT_TITLE' => 'SkypeOut&reg;',
	'LBL_USE_REAL_NAMES'	=> 'Mostrar Nomes Completos',
	'LBL_USE_REAL_NAMES_DESC'			=> 'Mostra o nome completo dos Usuários ao invés do Nome de Usuário nos campos de Atribuição.',
    'LBL_DISALBE_CONVERT_LEAD' => 'Desativar ação de conversão de Leads para Leads Convertidos',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Se um Lead já foi convertido, habilitar esta opção irá remover a ação de Conversão de Leads',
    'LBL_ENABLE_ACTION_MENU' => 'Mostrar ações dentro do menus',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Selecione para exibir as ações do Formuário de Detalhes e Subpainéis dentro de um menu suspenso. Se não selecionado, as ações serão exibidas como botões separados.',
    'LIST_ENTRIES_PER_LISTVIEW'=>'Número de registos por página nas Listagens',
	'LIST_ENTRIES_PER_SUBPANEL'=>'Número de registos por página nos Subpainéis',
	'LOG_MEMORY_USAGE'=>'Registar a utilização da memória',
	'LOG_SLOW_QUERIES'=>'Registar as consultas lentas',
    'LOCK_HOMEPAGE_HELP'=>'Esta configuração serve para prevenir<BR> 1) a adição de qualquer Dashlet na Página Principal, <BR>2) customização do posicionamento de Dashlet nas páginas principais através de arrastar e soltar.',
    'CURRENT_LOGO'=>'Logotipo atual:',
    'CURRENT_LOGO_HELP'=>'Este logotipo é exibido no canto superior esquerdo do sistema.',
    'NEW_LOGO'=>'Selecionar logotipo:',
	'NEW_LOGO_HELP'=>'O formato do arquivo de imagem pode ser .png ou .jpg. A altura máxima é 17px, e a largura máxima é 450px. Qualquer imagem carregada que for maior que estas dimesões será escalonada para estas dimensões máximas.',
    'NEW_LOGO_HELP_NO_SPACE'=>'O formato do arquivo de imagem pode ser .png ou .jpg. A altura máxima é 17px, e a largura máxima é 450px. Qualquer imagem carregada que for maior que estas dimesões será escalonada para estas dimensões máximas. O nome do arquivo não pode conter espaços.',
    'NEW_QUOTE_LOGO'=>'Carregar um novo logotipo para Cotações',
    'NEW_QUOTE_LOGO_HELP'=>'O formato do arquivo de imagem necessário é .jpg. <BR> O tamanho recomendado é 867x74 px.',
    'QUOTES_CURRENT_LOGO'=>'Logotipo para Cotações',
	'SLOW_QUERY_TIME_MSEC'=>'Limite de tempo de consultas lentas (ms)',
	'STACK_TRACE_ERRORS'=>'Exibir rastreamento de pilha de erros',
	'UPLOAD_MAX_SIZE'=>'Tamanho máximo de upload',
	'VERIFY_CLIENT_IP'=>'Validar endereço IP do Usuário',
    'LOCK_HOMEPAGE' => 'Impedir que o Usuário altere o layout da Página Principal',
    'LOCK_SUBPANELS' => 'Impedir que o Usuário altere o layout dos Subpainéis',
    'MAX_DASHLETS' => 'Número máximo de Dashlets na Página Principal',
	'SYSTEM_NAME'=>'Nome do Sistema:',
	'SYSTEM_NAME_WIZARD'=>'Name:',
	'SYSTEM_NAME_HELP'=>'Este é o nome que aparece na barra de título do seu browser.',
    'LBL_LDAP_TITLE'=>'Suporte para Autenticação LDAP',
    'LBL_LDAP_ENABLE'=>'Ativar LDAP',
    'LBL_LDAP_SERVER_HOSTNAME'=> 'Servidor:',
    'LBL_LDAP_SERVER_PORT'=> 'Número da Porta:',
    'LBL_LDAP_ADMIN_USER'=> 'Nome de Usuário:',
    'LBL_LDAP_ADMIN_USER_DESC'=>'Usado para pesquisar por usuários do Sugar. [Pode necessitar ser totalmente qualificado] Será anonimamente vinculado se não for fornecido.',
    'LBL_LDAP_ADMIN_PASSWORD'=> 'Senha:',
	'LBL_LDAP_AUTHENTICATION'=> 'Autenticação:',
	'LBL_LDAP_AUTHENTICATION_DESC'=>'Vincular ao servidor LDAP utilizando credenciais de usuário específicas',
    'LBL_LDAP_AUTO_CREATE_USERS'=>'Criação automática de usuários:',
    'LBL_LDAP_USER_DN'=>'DN Usuário:',
	'LBL_LDAP_GROUP_DN'=>'DN Grupo:',
	'LBL_LDAP_GROUP_DN_DESC'=>'Exemplo: <em>ou=groups,dc=example,dc=com</em>',
	'LBL_LDAP_USER_FILTER'=>'Filtro de Usuário:',
	'LBL_LDAP_GROUP_MEMBERSHIP'=>'Associação do Grupo:',
	'LBL_LDAP_GROUP_MEMBERSHIP_DESC'=>'Usuários devem ser membros de um grupo específico',
	'LBL_LDAP_GROUP_USER_ATTR'=>'Atributo de Usuário:',
	'LBL_LDAP_GROUP_USER_ATTR_DESC'=>'O identificador único da pessoa que será usada para verificar se eles são membro do grupo. Exemplo: <em>uid</em>',
	'LBL_LDAP_GROUP_ATTR_DESC'=>'O Atributo do Grupo que será usado para filtrar os atributos de usuário. Exemplo: <em>memberUid</em>',
	'LBL_LDAP_GROUP_ATTR'=>'Atributo de Grupo:',
	'LBL_LDAP_USER_FILTER_DESC'=>'Qualquer parâmetro adicional de filtro para aplicar quando autenticar usuários. Exemplo: \nis_sugar_user=1 ou (is_sugar_user=1)(is_sales=1)',
    'LBL_LDAP_LOGIN_ATTRIBUTE'=>'Atributo de Login:',
    'LBL_LDAP_BIND_ATTRIBUTE'=>'Atributo de Associação:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC'=>'Para Associação de Usuários LDAP <br>Exemplos: [<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;userPrincipalName] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC'=>'Para pesquisar por Usuários LDAP <br>Exemplos: [<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC'=>'Exemplo: ldap.example.com ou ldaps://ldap.example.com para SSL',
    'LBL_LDAP_SERVER_PORT_DESC'=>'Exemplo: <em>389 ou 636 para SSL</em>',
	'LBL_LDAP_GROUP_NAME'=>'Nome do Grupo:',
	'LBL_LDAP_GROUP_NAME_DESC'=>'Exemplo <em>cn=sugarcrm</em>',
    'LBL_LDAP_USER_DN_DESC'=>'Exemplo: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC'=>'Se um usuário autenticado não existe, um usuário será criado no Sugar.',
    'LBL_LDAP_ENC_KEY'	=> 'Chave de Encriptação:',
    'DEVELOPER_MODE'=>'Modo Desenvolvedor',

	'SHOW_DOWNLOADS_TAB' =>'Mostrar aba Downloads',
	'SHOW_DOWNLOADS_TAB_HELP' =>'Quando selecionado, a aba Downloads irá aparecer nas Configurações de Usuário e fornece aos Usuários acesso a plug-ins do Sugar e outros arquivos disponíveis.',
    'LBL_LDAP_ENC_KEY_DESC' => 'Para autenticação SOAP quando utilizar LDAP',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'A extensão php_mcrypt deve ser Ativada no seu arquivo php.ini',
    'LBL_ALL' => 'Todos',
    'LBL_MARK_POINT' => 'Marcar Ponto',
    'LBL_NEXT' => 'Próximo >>',
    'LBL_REFRESH_FROM_MARK' => 'Atualizar a partir da Marca',
    'LBL_SEARCH' => 'Pesquisar:',
    'LBL_REG_EXP' => 'Reg Exp:',
    'LBL_IGNORE_SELF' => 'Ignorar-se:',
    'LBL_MARKING_WHERE_START_LOGGING'=>'Marcar onde inciar o Registro (Log)',
    'LBL_DISPLAYING_LOG'=>'Exibindo Registo(Log)',
    'LBL_YOUR_PROCESS_ID'=>'Seu ID de processo',
    'LBL_YOUR_IP_ADDRESS'=>'Seu Endereço de IP é',
    'LBL_IT_WILL_BE_IGNORED'=>'Será ignorado ',
    'LBL_LOG_NOT_CHANGED'=>'Registo(Log) não alterado',
    'LBL_ALERT_JPG_IMAGE' => 'O formato do arquivo da imagem deve ser JPEG. Carregue um novo arquivo com a extensão .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'O formato do arquivo da imagem deve ser JPEG ou PNG. Carregue um novo arquivo com a extensão .jpg ou .png.',
    'LBL_ALERT_SIZE_RATIO' => 'A proporção da imagem deve estar entre 1:1 e 10:1. A imagem será redimensionada.',
    'LBL_ALERT_SIZE_RATIO_QUOTES' => 'A proporção da imagem deve estar entre 3:1 e 20:1. Carregue um novo arquivo com esta proporção.',
    'ERR_ALERT_FILE_UPLOAD' => 'Erro durante o carregamento da imagem.',
    'LBL_LOGGER'=>'Configurações de Logger',
	'LBL_LOGGER_FILENAME'=>'Nome do Arquivo Log',
	'LBL_LOGGER_FILE_EXTENSION'=>'Extensão',
	'LBL_LOGGER_MAX_LOG_SIZE'=>'Tamanho máximo',
	'LBL_LOGGER_DEFAULT_DATE_FORMAT'=>'Formato padrão da data',
	'LBL_LOGGER_LOG_LEVEL'=>'Nível de Log',
        'LBL_LEAD_CONV_OPTION' => 'Opções de Conversão de Leads',
        'LEAD_CONV_OPT_HELP' => 'b>Copiar</b> - Cria e relaciona cópias de todas as atividades dos Leads para novos registros que são selecionados pelo usuário durante a conversão. Cópias são criadas para cada um dos registros selecionados.<br /><br /><b>Mover</b> - Move todas as atividades dos Leads para um novo registro que é selecionado pelo usuário durante a conversão.<br /><br /><b>Não fazer Nada</b> - Não faz nada com as atividades dos Leads durante a conversão. As atividades continuam relacionados apenas ao Lead.',
        'LBL_CONFIG_AJAX' => 'Configurar Interface de Usuário AJAX',
        'LBL_CONFIG_AJAX_DESC' => 'Habilitar ou desabilitar a utilização da Interface de Usuário AJAX para módulos especificos.',
	'LBL_LOGGER_MAX_LOGS'=>'Número máximo de logs (antes da rotação)',
	'LBL_LOGGER_FILENAME_SUFFIX' => 'Anexar após o nome do arquivo',
	'LBL_VCAL_PERIOD' => 'Período de Tempo das atualizações vCal:',
    'LBL_IMPORT_MAX_RECORDS' => 'Importação - Número Máximo de Linhas',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Especificar quantas linhas são permitidas dentro de arquivos de importação.<br>Se o número de linhas em um arquivo de importação exceder este número, o usuário será alertado. <br>Se nenhum número é inserido, um número ilimitado de linhas estão permitidos.',
	'vCAL_HELP' => 'Utilize esta configuração para determinar o número de meses de antecedência à atual data em que a informação Livre/Ocupado para chamadas telefônicas e reuniões é publicada.</BR>Para desligar a publicação Livre/Ocupado, informe "0". O mínimo é 1 mês; o máximo são 12 meses.',
    'LBL_PDFMODULE_NAME' => 'Configurações de PDF',
    'SUGARPDF_BASIC_SETTINGS' => 'Propriedades do Documento',
    'SUGARPDF_ADVANCED_SETTINGS' => 'Configurações Avançadas',
    'SUGARPDF_LOGO_SETTINGS' => 'Imagens',

    'PDF_CREATOR' => 'Criador do PDF',
    'PDF_CREATOR_INFO' => 'Define o criador do documento.<br>Este é tipicamente o nome da aplicação que gera o PDF.',

    'PDF_AUTHOR' => 'Autor',
    'PDF_AUTHOR_INFO' => 'O Autor aparece nas propriedades do documento.',

    'PDF_HEADER_LOGO' => 'Para Documentos PDF de Cotações',
    'PDF_HEADER_LOGO_INFO' => 'Esta imagem aparece no cabeçalho padrão em Documentos PDF de Cotações',

    'PDF_NEW_HEADER_LOGO' => 'Selecionar Nova Imagem para Cotações',
    'PDF_NEW_HEADER_LOGO_INFO' => 'O formato do arquivo pode ser .jpg ou .png. (Somente .jpg para EZPDF)<BR>O tamanho recomendado é 867x60 px.',

    'PDF_HEADER_LOGO_WIDTH' => 'Largura da Imagem de Cotações',
    'PDF_HEADER_LOGO_WIDTH_INFO' => 'Modificar a escala da imagem carregada que aparece nos Documentos PDF Cotações. (Somente TCPDF)',

    'PDF_SMALL_HEADER_LOGO' => 'Para Documentos PDF de Relatórios',
    'PDF_SMALL_HEADER_LOGO_INFO' => 'Esta imagem aparece no cabeçalho padrão em Documentos PDF de Relatórios.<br> Esta imagem também aparece no canto superior esquerdo da aplicação Sugar.',

    'PDF_NEW_SMALL_HEADER_LOGO' => 'Selecionar Nova Imagem para Relatórios',
    'PDF_NEW_SMALL_HEADER_LOGO_INFO' =>	'O formato do arquivo pode ser .jpg ou .png. (Somente .jpg para EZPDF)<BR>O tamanho recomendado é 212x40 px.',

    'PDF_SMALL_HEADER_LOGO_WIDTH' => 'Largura da Imagem de Relatórios',
    'PDF_SMALL_HEADER_LOGO_WIDTH_INFO' => 'Modificar a escala da imagem carregada que aparece nos Documentos PDF Relatórios. (Somente TCPDF)',


    'PDF_HEADER_STRING' => 'Texto do Cabeçalho',
    'PDF_HEADER_STRING_INFO' => 'Texto da descrição do Cabeçalho',

    'PDF_HEADER_TITLE' => 'Título do Cabeçalho',
    'PDF_HEADER_TITLE_INFO' => 'Texto para imprimir como título no cabeçalho do documento',

    'PDF_FILENAME' => 'Nome padrão de arquivo',
    'PDF_FILENAME_INFO' => 'Nome padrão de arquivo para os Arquivos PDF gerados',

    'PDF_TITLE' => 'Título',
    'PDF_TITLE_INFO' => 'O Título aparece nas propriedades do documento.',

    'PDF_SUBJECT' => 'Assunto',
    'PDF_SUBJECT_INFO' => 'O Assunto aparece nas propriedades do documento.',

    'PDF_KEYWORDS' => 'Palavras-chave',
    'PDF_KEYWORDS_INFO' => 'Associar Palavras-chave ao documento, geralmente no formato "palavra-chave1 palavra-chave2..."',

    'PDF_COMPRESSION' => 'Compressão',
    'PDF_COMPRESSION_INFO' => 'Ativa ou desativa a compressão da página. <br>Quando Ativada, a representação interna de cada página é comprimida, o que leva a uma taxa de compressão de aproximada de 2 para o documento resultante.',

    'PDF_JPEG_QUALITY' => 'Qualidade JPEG (1-100)',
    'PDF_JPEG_QUALITY_INFO' => 'Definir a qualidade padrão de compressão JPEG (1-100)',

    'PDF_PDF_VERSION' => 'Versão PDF',
    'PDF_PDF_VERSION_INFO' => 'Definir a versão PDF (verificar a referência PDF para valores válidos).',

    'PDF_PROTECTION' => 'Proteção do Documento',
    'PDF_PROTECTION_INFO' => 'Definir a proteção do documento<br>- copiar: copiar texto e imagens para o clipboard<br>- imprimir: imprimir o documento <br>- modificar: modificá-lo (exceto para anotações e formulários)<br>- anotar-formulários: adicionar anotações e formulários<br>Nota: a proteção contra a modificação é para as pessoas que têm o produto Acrobat completo.',

    'PDF_USER_PASSWORD' => 'Senha do Usuário',
    'PDF_USER_PASSWORD_INFO' => 'Se você não definir nenhuma Senha, o documento abrirá como habitual. <br>Se definir uma Senha de Usuário, o visualizador de PDF irá pedi-la antes de exibir o documento. <br>A Senha do Proprietário, se for diferente da do Usuário, pode ser usada para obter acesso total.',

    'PDF_OWNER_PASSWORD' => 'Senha do Proprietário',
    'PDF_OWNER_PASSWORD_INFO' => 'Se você não definir nenhuma Senha, o documento abrirá como habitual. <br>Se definir uma Senha de Usuário, o visualizador de PDF irá pedi-la antes de exibir o documento. <br>A Senha do Proprietário, se for diferente da do Usuário, pode ser usada para obter acesso total.',

    'PDF_ACL_ACCESS' => 'Controle de Acesso',
    'PDF_ACL_ACCESS_INFO' => 'Controle de Acesso Padrão para a geração de PDF.',

    'K_CELL_HEIGHT_RATIO' => 'Proporção da Altura da Célula',
    'K_CELL_HEIGHT_RATIO_INFO' => 'Se a altura de uma célula é menor que (Proporção Altura da Fonte x Altura da Célula), então (Proporção Altura da Fonte x Altura da Célula) é usada como a altura da célula.<br>(Proporção Altura da Fonte x Altura da Célula) é também usada como altura da célula quando não está definida nenhuma altura.',

    'K_TITLE_MAGNIFICATION' => 'Ampliação do Título',
    'K_TITLE_MAGNIFICATION_INFO' => 'Ampliação do título respeita o tamanho principal da fonte.',

    'K_SMALL_RATIO' => 'Fator para Fonte Pequena',
    'K_SMALL_RATIO_INFO' => 'Fator de redução para fonte pequena.',

    'HEAD_MAGNIFICATION' => 'Ampliação do Cabeçalho',
    'HEAD_MAGNIFICATION_INFO' => 'Fator de ampliação para títulos.',

    'PDF_IMAGE_SCALE_RATIO' => 'Proporção da escala da imagem',
    'PDF_IMAGE_SCALE_RATIO_INFO' => 'Proporção usada para escalar as imagens',

    'PDF_UNIT' => 'Unidade',
    'PDF_UNIT_INFO' => 'Unidade de medição do documento',
	'PDF_GD_WARNING'=>'Você não tem a GD library instalada para PHP. Sem a GD library instalada, apenas os logotipos JPEG podem ser exibidos em documentos PDF.',
    'ERR_EZPDF_DISABLE'=>'Aviso: A classe EZPDF está desativada na tabela de configuração e foi definida como a classe PDF. Por favor "Salve" este formulário para definir o TCPDF como a Classe PDF e retornar num estado estável.',
    'LBL_IMG_RESIZED'=>"redimensionado para exibição)",


    'LBL_FONTMANAGER_BUTTON' => 'Gerenciador de Fonte PDF',
    'LBL_FONTMANAGER_TITLE' => 'Gerenciador de Fonte PDF',
    'LBL_FONT_BOLD' => 'Negrito',
    'LBL_FONT_ITALIC' => 'Itálico',
    'LBL_FONT_BOLDITALIC' => 'Negrito/Itálico',
    'LBL_FONT_REGULAR' => 'Regular',

    'LBL_FONT_TYPE_CID0' => 'CID-0',
    'LBL_FONT_TYPE_CORE' => 'Core',
    'LBL_FONT_TYPE_TRUETYPE' => 'TrueType',
    'LBL_FONT_TYPE_TYPE1' => 'Type1',
    'LBL_FONT_TYPE_TRUETYPEU' => 'TrueTypeUnicode',

    'LBL_FONT_LIST_NAME' => 'Nome',
    'LBL_FONT_LIST_FILENAME' => 'Nome do arquivo',
    'LBL_FONT_LIST_TYPE' => 'Tipo',
    'LBL_FONT_LIST_STYLE' => 'Estilo',
    'LBL_FONT_LIST_STYLE_INFO' => 'Estilo da fonte',
    'LBL_FONT_LIST_ENC' => 'Codificação',
    'LBL_FONT_LIST_EMBEDDED' => 'Embutido',
    'LBL_FONT_LIST_EMBEDDED_INFO' => 'Marcar para embutir a fonte no arquivo PDF',
    'LBL_FONT_LIST_CIDINFO' => 'Informação CID',
    'LBL_FONT_LIST_CIDINFO_INFO' => "Exemplos :".
"<ul><li>".
"Chinês Tradicional :<br>".
"<pre>\$enc=\'UniCNS-UTF16-H\';<br>".
"\$cidinfo=array(\'Registry\'=>\'Adobe\', \'Ordering\'=>\'CNS1\',\'Supplement\'=>0);<br>".
"include(\'include/tcpdf/fonts/uni2cid_ac15.php\');</pre>".
"</li><li>".
"Chinês Simplificado :<br>".
"<pre>\$enc=\'UniGB-UTF16-H\';<br>".
"\$cidinfo=array(\'Registry\'=>\'Adobe\', \'Ordering\'=>\'GB1\',\'Supplement\'=>2);<br>".
"include(\'include/tcpdf/fonts/uni2cid_ag15.php\');</pre>".
"</li><li>".
"Koreano :<br>".
"<pre>\$enc=\'UniKS-UTF16-H\';<br>".
"\$cidinfo=array(\'Registry\'=>\'Adobe\', \'Ordering\'=>\'Korea1\',\'Supplement\'=>0);<br>".
"include(\'include/tcpdf/fonts/uni2cid_ak12.php\');</pre>".
"</li><li>".
"Japonês :<br>".
"<pre>\$enc=\'UniJIS-UTF16-H\';<br>".
"\$cidinfo=array(\'Registry\'=>\'Adobe\', \'Ordering\'=>\'Japan1\',\'Supplement\'=>5);<br>".
"include(\'include/tcpdf/fonts/uni2cid_aj16.php\');</pre>".
"</li></ul>".
"Mais ajuda : www.tcpdf.org",
    'LBL_FONT_LIST_FILESIZE' => 'Tamanho da Fonte (KB)',
    'LBL_ADD_FONT' => 'Adicionar uma fonte',
    'LBL_BACK' => 'Voltar',
    'LBL_REMOVE' => 'rem',
    'LBL_JS_CONFIRM_DELETE_FONT' => 'Você está certo que quer excluir esta fonte?',

    'LBL_ADDFONT_TITLE' => 'Adicionar uma Fonte PDF',
    'LBL_PDF_PATCH' => 'Patch',
    'LBL_PDF_PATCH_INFO' => 'Modificação personalizada da codificação. Escrever um array PHP. <br>Exemplo :<br>ISO-8859-1 não contém o símbolo do euro. Para adicioná-lo na posição 164, escreva "array(164=>\\\'Euro\\\')".',
    'LBL_PDF_ENCODING_TABLE' => 'Tabela de Codificação',
    'LBL_PDF_ENCODING_TABLE_INFO' => 'Nome da tabela de codificação.<br>Esta opção é ignorada para TrueType Unicode, OpenType Unicode e fontes simbólicas.<br>A codificação define a associação entre um código (de 0 a 255) e um caractere contido na fonte.<br>Os primeiros 128 são fixos e correspondem ao ASCII.',
    'LBL_PDF_FONT_FILE' => 'Arquivo da Fonte',
    'LBL_PDF_FONT_FILE_INFO' => 'arquivo .ttf ou .otf ou .pfb',
    'LBL_PDF_METRIC_FILE' => 'Arquivo Métrico',
    'LBL_PDF_METRIC_FILE_INFO' => 'arquivo .afm ou .ufm',
    'LBL_ADD_FONT_BUTTON' => 'Adicionar',
    'JS_ALERT_PDF_WRONG_EXTENSION' => 'Este arquivo não tem uma boa extensão de arquivo.',
    'LBL_PDF_INSTRUCTIONS' => 'Instruções',
    'PDF_INSTRUCTIONS_ADD_FONT' => <<<BSOFR
Fontes suportadas pelo SugarPDF :
<ul>
<li>TrueTypeUnicode (UTF-8 Unicode)</li>
<li>OpenTypeUnicode</li>
<li>TrueType</li>
<li>OpenType</li>
<li>Type1</li>
<li>CID-0</li>
</ul>
<br>
Se optar por não embutir a sua fonte no PDF, o arquivo PDF gerado será mais leve, mas será usada uma substituição se a fonte não estiver disponível no sistema do seu leitor.
<br><br>
Adicionar uma fonte PDF ao SugarCRM requer seguir os passos 1 e 2 da documentação Fontes TCPDF disponível na seção "DOCS" do <a href = "http://www.tcpdf.org" target="_blank">Site TCPDF</a>.
<br> Os pfm2afm e ttf2ufm utils estão disponíveis em fontes/utils no pacote TCPDF que pode ser descarregado na seção "Download" do <a href = "http://www.tcpdf.org" target = "_blank">Site TCPDF</a>.
<br>Carregar o arquivo métrico gerado na etapa 2 e o seu arquivo de fonte abaixo.
BSOFR
,
    'ERR_MISSING_CIDINFO' => 'O campo Informação CID não pode estar em branco.',
    'LBL_ADDFONTRESULT_TITLE' => 'Resultado do processo de adicionamento de fonte',
    'LBL_STATUS_FONT_SUCCESS' => 'SUCESSO: A fonte foi adicionada ao SugarCRM.',
    'LBL_STATUS_FONT_ERROR' => 'ERRO: A fonte não foi adicionada. Consulte o registo abaixo.',
    'LBL_FONT_MOVE_DEFFILE' => 'arquivo de definição de fonte movido para :',
    'LBL_FONT_MOVE_FILE' => 'arquivo de definição movido para :',

// Font manager
    'ERR_LOADFONTFILE' => 'ERRO: Erro LoadFontFile!',
    'ERR_FONT_EMPTYFILE' => 'ERRO: Nome de arquivo vazio!',
    'ERR_FONT_UNKNOW_TYPE' => 'ERRO: Tipo de fonte desconhecido:',
    'ERR_DELETE_CORE_FILE' => 'ERRO: Não é possível remover uma fonte nuclear.',
    'ERR_NO_FONT_PATH' => 'ERRO: Nenhum path de fonte disponível!',
    'ERR_NO_CUSTOM_FONT_PATH' => 'ERRO: Nenhum path de fonte personalizado disponível!',
    'ERR_FONT_NOT_WRITABLE' => 'não é editável.',
    'ERR_FONT_FILE_DO_NOT_EXIST' => 'não existe ou não é um diretório.',
    'ERR_FONT_MAKEFONT' => 'ERRO: Erro MakeFont',
    'ERR_FONT_ALREADY_EXIST' => 'ERRO: Esta fonte já existe. Desfazendo...',
    'ERR_PDF_NO_UPLOAD' => 'Erro durante o carregamento da fonte ou arquivo métrico.',

// Wizard
    'LBL_WIZARD_TITLE' => 'Assitente de Administração',
    'LBL_WIZARD_WELCOME_TAB' => 'Bem-vindo',
    'LBL_WIZARD_WELCOME_TITLE' => 'Bem-vindo ao Sugar!',
    'LBL_WIZARD_WELCOME' => 'Clique em <b>Próximo</b> para definir algumas configurações agora. Se você deseja configurar o sistema mais tarde, clique <b>Pular</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Próximo >',
    'LBL_WIZARD_BACK_BUTTON' => '< Anterior',
    'LBL_WIZARD_SKIP_BUTTON' => 'Pular',
    'LBL_WIZARD_FINISH_BUTTON' => 'Concluir',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Continuar',
    'LBL_WIZARD_FINISH_TAB' => 'Concluir',
    'LBL_WIZARD_FINISH_TITLE' => 'A configuração Básica do sistema está concluída!',
    'LBL_WIZARD_FINISH' => 'Clique <b>Continuar</b> para configurar as definições de Usuário.<br /><br />
Para configurar definições adicionais do sistema, clique <a href="index.php?module=Administration&amp;action=index" target="_blank">aqui</a>.',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Marca',
    'LBL_WIZARD_SYSTEM_DESC' => 'Insira o nome de sua organização e o logotipo para personalizar sua marca no sistema.',
    'LBL_WIZARD_LOCALE_DESC' => 'Especifique como você quer que as datas sejam exibidas em seu sistema, baseado em sua localização geográfica. As definições inseridas aqui serão as configurações padrão. Os usuários poderão definir suas próprias preferências.',
    'LBL_WIZARD_SMTP_DESC' => 'Forneça dados de uma conta de E-mail que será utilizada para enviar E-mails, como notificações de atribuição e novas senhas de usuário. Os usuários receberão E-mails do sistema conforme a definição desta conta de E-mail.',
    'LBL_MOBILE_MOD_REPORTS_RESTRICTION' => '* O módulo de Relatórios está disponível apenas para o cliente Sugar Mobile iPhone.',
	'LBL_GMAIL_LOGO' => 'Gmail Logo' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL' => 'Yahoo Mail' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange' /*for 508 compliance fix*/,
	'LBL_LOADING' => 'Carregando...' /*for 508 compliance fix*/,
	'LBL_DELETE' => 'Excluir' /*for 508 compliance fix*/,
	'LBL_WELCOME' => 'Bem vindo' /*for 508 compliance fix*/,
	'LBL_LOGO' => 'Logotipo' /*for 508 compliance fix*/,
    'LBL_MOBILE_MOD_REPORTS_RESTRICTION' => '* O módulo de Relatórios está disponível apenas paraclientes nativos do Sugar Mobile.',
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Mostrar E-mails de Contatos relacionados no subpainel Histórico para módulos.',
);


?>
