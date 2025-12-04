
<?php
// update plugin
function updatePluginFromGitHub($gitURL, $branch = "master", $pluginName, $doUpdate = true) {
    global $settings;
    logEntry("updating plugin: " . $pluginName);
    logEntry("settings: " . $settings['pluginDirectory']);

    // create update    logEntry("update command: " . $pluginUpdateCMD);    // create update script

    // Only execute update if $doUpdate is true
    if ($doUpdate) {
        exec($pluginUpdateCMD, $updateResult);
    }

    return; // ($updateResult);
}
?>
    // $gitUpdateCMD = "sudo cd " . $settings['pluginDirectory'] . "/" . $pluginName . "; sudo /usr/bin/git git pull " . $gitURL . " " . $branch;
    $pluginUpdateCMD = "/opt/fpp/scripts/update_plugin " . $pluginName;
