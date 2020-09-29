<?php
$output = shell_exec("docker login");
echo $output;
while (true) {
  $githuburl = readline("Enter a valid github url which contains Dockerfile (type 'quit' to exit program): ");
  if ($githuburl === 'quit') {
    exit("bye for now!");
  }
  $pos = strrpos($githuburl, '/');
  if ($pos === false) {
    print_r("not valid github url: ".$githuburl. "\n");
    continue;
  }
  $reponame = substr($githuburl, $pos + 1);
  $dockerreponame = 'semitaho/'.$reponame;
  echo "Starting to build repo dockerfile...\n";
  $output = shell_exec('docker build -t '.$dockerreponame.' '.$githuburl.'.git');
  if (!$output) {
    echo "Cannot find repository or dockerfile from it!\n";
    continue;
  }
  echo $output;
  echo "pushing image ".$dockerreponame. " into docker hub...\n";
  exec('docker push '.$dockerreponame);
  echo "All done!\n";
}
?>
