<?php
if ($this->user->userMetadataModel->exists($this->user->getid(), "boardcustomizer_materialcard")) {
    /* change overall card layout and shadow */
    ?>
    <style>
        .board-task-list>div {
            font-size: 13px;
            border-left-width: 2.5px !important;
            /* background-color: white!important;
                                                    background: #fff; */
            border-radius: 3px;
            padding-left: 6px;
            padding-right: 4px;
            padding-top: 6px;
            padding-bottom: 6px;
            margin-bottom: 8px;
            margin-left: 8px;
            margin-right: 8px;
            box-shadow: 0 1px 2px rgba(62, 54, 54, 0.55);
            border-right: none;
            border-top: 1px solid #ececec;
            border-bottom: none;
        }
    </style>
<?php
}
if ($this->user->userMetadataModel->exists($this->user->getid(), "boardcustomizer_onlyfirstcolumnheaders")) {
    /* This will hide all column titles on swimlanes except for the first one */
    ?>
    <style>
        tr[class*='board-swimlane-columns']:not(:first-child) {
            display: none;
        }

        .board-column-header-task-count {
            display: none;
        }
    </style>
<?php
}
if ($this->user->userMetadataModel->exists($this->user->getid(), "boardcustomizer_hidetaskage")) {
    /* hide task age */
    ?>
    <style>
        .task-icon-age {
            display: none;
        }
    </style>
<?php
}
if ($this->user->userMetadataModel->exists($this->user->getid(), "boardcustomizer_hidetaskpriority")) {
    /* hide task priority */
    ?>
    <style>
        .task-priority {
            display: none;
        }
    </style>
<?php
}
if ($this->user->userMetadataModel->exists($this->user->getid(), "boardcustomizer_whitebackground")) {
    /* hide task priority */
    ?>
    <style>
        .board-task-list>div {
            background-color: white !important;
            background: #fff;
        }
    </style>
<?php
}
if ($this->user->userMetadataModel->exists($this->user->getid(), "boardcustomizer_optimizehiddencolumn")) {
    /* hide task priority */
    ?>
    <style>
        #board th.board-column-header-collapsed {
            width: 1rem;
            min-width: 1rem;
        }

        .board-rotation-wrapper {
            border: none !important;
            box-shadow: none !important;
        }
    </style>
<?php
}
if ($this->user->userMetadataModel->exists($this->user->getid(), "boardcustomizer_topnavhiddenscrollbar")) {
    /* better nav bar */
    ?>
    <style>
        #select-dropdown-menu {
            overflow: auto !important;
        }
    </style>
<?php
}
if ($this->user->userMetadataModel->exists($this->user->getid(), "boardcustomizer_groupassign_hidecardlabels")) {
    /* hide group assign labels */
    ?>
    <style>
        .assigned-group-label {
            display: none;
        }

        .assigned-other-label {
            display: none;
        }
    </style>
<?php
}