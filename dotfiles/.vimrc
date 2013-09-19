set nocompatible
set history=50
set ignorecase
set notitle
set wrapscan
set number
set ruler
set nolist
set showcmd
set showmatch
set laststatus=2
set backspace=indent,eol,start
set shiftwidth=4
set softtabstop=0
set backup
"set encoding=euc-jp
set encoding=utf-8
"set fileencodings=euc-jp
set fileencodings=utf-8,euc-jp,ucs-2le,ucs-2,cp932
set incsearch
set hlsearch
set modelines=10
set nolist
set tabstop=2
set expandtab
set autoindent
set backupdir=/Users/kyagi/backup
set backupext=.bak
set undolevels=100

"set dictionary
autocmd BufRead *.php\|*.ctp\|*.tpl :set dictionary=~/.vim/dictionaries/php.dict filetype=php

"neobundle Settings
set nocompatible               " Be iMproved
if has('vim_starting')
  set runtimepath+=~/.vim/bundle/neobundle.vim/
endif
call neobundle#rc(expand('~/.vim/bundle/'))
" Let NeoBundle manage NeoBundle
NeoBundleFetch 'Shougo/neobundle.vim'
" Recommended to install
" After install, turn shell ~/.vim/bundle/vimproc, (n,g)make -f your_machines_makefile
NeoBundle 'Shougo/vimproc'
"My Bundles here:
"
" Note: You don't set neobundle setting in .gvimrc!
" Original repos on github
NeoBundle 'tpope/vim-fugitive'
NeoBundle 'Lokaltog/vim-easymotion'
NeoBundle 'rstacruz/sparkup', {'rtp': 'vim/'}
NeoBundle 'Shougo/neocomplcache'
NeoBundle 'Shougo/unite.vim'
NeoBundle 'ujihisa/unite-colorscheme'
NeoBundle 'thinca/vim-ref'
let g:ref_phpmanual_path = $HOME . '/.vim/refs/php-chunked-xhtml'
"quickrun config
NeoBundle 'thinca/vim-quickrun'
let g:quickrun_config = {}
let g:quickrun_config.markdown = { 'outputter' : 'null', 'command' : 'open', 'cmdopt' : '-a', 'args' : 'Marked', 'exec' : '%c %o %a %s', }
" vim-scripts repos
NeoBundle 'L9'
NeoBundle 'FuzzyFinder'
NeoBundle 'rails.vim'
" Non github repos
NeoBundle 'git://git.wincent.com/command-t.git'
" gist repos
" NeoBundle 'gist:Shougo/656148', { \ 'name': 'everything.vim', \ 'script_type': 'plugin'}
" Non git repos
NeoBundle 'http://svn.macports.org/repository/macports/contrib/mpvim/'
"colorschemes
NeoBundle 'altercation/vim-colors-solarized'
NeoBundle 'croaker/mustang-vim'
NeoBundle 'jeffreyiacono/vim-colors-wombat'
NeoBundle 'nanotech/jellybeans.vim'
NeoBundle 'vim-scripts/Lucius'
NeoBundle 'vim-scripts/Zenburn'
NeoBundle 'mrkn/mrkn256.vim'
NeoBundle 'jpo/vim-railscasts-theme'
NeoBundle 'therubymug/vim-pyte'
NeoBundle 'connvoi/vim-color-connvoi'
"syntastic
NeoBundle 'Markdown'
NeoBundle 'plasticboy/vim-markdown'
NeoBundle 'scrooloose/syntastic'
let g:syntastic_check_on_open = 1
let g:syntastic_enable_signs = 1
let g:syntastic_echo_current_error = 1
let g:syntastic_auto_loc_list = 2
let g:syntastic_enable_highlighting = 1
" php cmd option
let g:syntastic_php_php_args = '-l'
set statusline+=%#warningmsg#
set statusline+=%{SyntasticStatuslineFlag()}
set statusline+=%*

 filetype plugin indent on     " Required!


 "lightline
 NeoBundle 'itchyny/lightline.vim'
 let g:lightline={ 'colorscheme' : 'wombat',}

 "
 " Brief help
 " :NeoBundleList          - list configured bundles
 " :NeoBundleInstall(!)    - install(update) bundles
 " :NeoBundleClean(!)      - confirm(or auto-approve) removal of unused bundles

 " Installation check.
 NeoBundleCheck

"backupdir settings
"when open files 
let &directory = &backupdir
"neocomplcache settings
let g:neocomplcache_enable_at_startup = 1
let g:neocomplcache_enable_camel_case_completion = 1
let g:neocomplcache_enable_underbar_completion = 1
let g:neocomplcache_smart_case = 1
let g:neocomplcache_min_syntax_length = 3
let g:neocomplcache_manual_completion_start_length = 0
let g:neocomplcache_caching_percent_in_statusline = 1
let g:neocomplcache_enable_skip_completion = 1
let g:neocomplcache_skip_input_time = '0.5'

function AC_Brackets()
inoremap { {}<LEFT>
inoremap [ []<LEFT>
inoremap ( ()<LEFT>
inoremap " ""<LEFT>
inoremap ' ''<LEFT>
endfunction
if has("autocmd")
autocmd FileType php        call AC_Brackets()
autocmd FileType c          call AC_Brackets()
autocmd FileType cpp        call AC_Brackets()
autocmd FileType javascript call AC_Brackets()
autocmd FileType perl       call AC_Brackets()
autocmd FileType ruby       call AC_Brackets()
autocmd FileType python       call AC_Brackets()
autocmd FileType html       call AC_Brackets()
endif

"keyconfig
imap jj <ESC>
nmap j gj
nmap k gk
vmap j gj
vmap k gk


syntax on
colorscheme connvoi
"
"colorscheme pyte
"hilight test
":so /home/y/share/vim/vim70/syntax/hitest.vim
"color test
":so /home/y/share/vim/vim70/syntax/colortest.vim
"change comment color
"hi Comment ctermfg=black or etc
"if 16 colors, %s/darkblue/blue/g
