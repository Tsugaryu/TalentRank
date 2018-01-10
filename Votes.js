    var Votes= class Votes{
        constructor(){
            
        }
        getVoteASR(pagerank){
        var asr=[];
		for(var login in pagerank){//parcours login
			for(var matiere in pagerank[login]){//parcours matiere
				if(matiere=='ASR'){
					var voted=[];
					for(var nomEleve in matiere){//ajoute les élèves
						voted.push(matiere[nomEleve]);
						document.writer("nomEleve: "+nomEleve);
					}
					asr[login]=voted;
				}
				
			}

		
		}
		return asr;
        }
     };
        
        