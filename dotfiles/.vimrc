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
set backupdir=/Users/kyagi/backup/
set backupext=.bak
set undolevels=100

"set dictionary
autocmd BufRead *.php\|*.ctp\|*.tpl :set dictionary=~/.vim/dictionaries/php.dict filetype=php
au BufRead,BufNewFile *.md set filetype=markdown

"neobundle Settings
set nocompatible               " Be iMproved
if has('vim_starting')
  set runtimepath+=~/.vim/bundle/neobundle.vim/
endif
call neobundle#begin(expand('~/.vim/bundle/'))
NeoBundleFetch 'Shougo/neobundle.vim'
call neobundle#end()

  " Let NeoBundle manage NeoBundle
  NeoBundleFetch 'git://github.com/Shougo/neobundle.vim'
  " Recommended to install
  " After install, turn shell ~/.vim/bundle/vimproc, (n,g)make -f your_machines_makefile
  NeoBundle 'git://github.com/Shougo/vimproc'
	NeoBundle 'Shougo/vimproc.vim', {
	      \   'build' : {
	      \     'windows' : 'tools\\update-dll-mingw',
	      \     'cygwin' : 'make -f make_cygwin.mak',
	      \     'mac' : 'make -f make_mac.mak',
	      \     'linux' : 'make',
	      \     'unix' : 'gmake',
	      \   }
	      \ }


  "My Bundles here:
  "
  " Note: You don't set neobundle setting in .gvimrc!
  " Original repos on github
  NeoBundle 'git://github.com/tpope/vim-fugitive'
  NeoBundle 'git://github.com/Lokaltog/vim-easymotion'
  NeoBundle 'git://github.com/rstacruz/sparkup', {'rtp': 'vim/'}
  NeoBundle 'git://github.com/Shougo/neocomplcache'
  NeoBundle 'git://github.com/Shougo/unite.vim'
  NeoBundle 'git://github.com/ujihisa/unite-colorscheme'
  NeoBundle 'git://github.com/thinca/vim-ref'
  let g:ref_phpmanual_path = $HOME . '/.vim/refs/php-chunked-xhtml'
  "install tagbar
  NeoBundle 'majutsushi/tagbar'
  " tagbar の設定
  "":TagbarShowTag を叩かなくても有効にする
  "let g:tagbar_width = 30  
  "let g:tagbar_autoshowtag = 1   
  NeoBundle 'vim-scripts/tagbar-phpctags', {
    \   'build' : {
    \     'others' : 'chmod +x bin/phpctags',
    \   },
    \ }
  "let g:tagbar_phpctags_bin='/User/kyagi/Project/phpctags/bin'
  let g:tagbar_phpctags_memory_limit = '512M'


  "quickrun config
  NeoBundle 'git://github.com/thinca/vim-quickrun'
  let g:quickrun_config = {}
  let g:quickrun_config.markdown = { 'outputter' : 'null', 'command' : 'open', 'cmdopt' : '-a', 'args' : 'Marked', 'exec' : '%c %o %a %s', }
  " vim-scripts repos
  NeoBundle 'git://github.com/vim-scripts/L9'
  NeoBundle 'git://github.com/vim-scripts/FuzzyFinder'
  " Non github repos
  NeoBundle 'git://git.wincent.com/command-t.git'
  " gist repos
  " NeoBundle 'gist:Shougo/656148', { \ 'name': 'everything.vim', \ 'script_type': 'plugin'}
  " Non git repos
  NeoBundle 'http://svn.macports.org/repository/macports/contrib/mpvim/'
  "colorschemes
  NeoBundle 'git://github.com/altercation/vim-colors-solarized'
  NeoBundle 'git://github.com/croaker/mustang-vim'
  NeoBundle 'git://github.com/jeffreyiacono/vim-colors-wombat'
  NeoBundle 'git://github.com/nanotech/jellybeans.vim'
  NeoBundle 'git://github.com/vim-scripts/Lucius'
  NeoBundle 'git://github.com/vim-scripts/Zenburn'
  NeoBundle 'git://github.com/mrkn/mrkn256.vim'
  NeoBundle 'git://github.com/jpo/vim-railscasts-theme'
  NeoBundle 'git://github.com/therubymug/vim-pyte'
  NeoBundle 'git://github.com/connvoi/vim-colors-connvoi'
  "syntastic
  "NeoBundle 'Markdown'
  NeoBundle 'git://github.com/plasticboy/vim-markdown'
  let g:vim_markdown_folding_disabled=1
  NeoBundle 'kannokanno/previm'
  NeoBundle 'tyru/open-browser.vim'
  NeoBundle 'git://github.com/scrooloose/syntastic'
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
  "install Nerdtree
  "show Hidenfiles(ex .vimrc
  NeoBundle 'scrooloose/nerdtree'
  let NERDtreeShowHidden=1
  "autostart nerdtree
  "autocmd VimEnter * execute 'NERDTree'

 "lightline
NeoBundle 'git://github.com/itchyny/lightline.vim'
let g:lightline={ 'colorscheme' : 'wombat',}

if !has('gui_running')
  set t_Co=256
endif

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
nmap <F8> :TagbarToggle<CR>
vmap j gj
vmap k gk

syntax on
colorscheme connvoi
