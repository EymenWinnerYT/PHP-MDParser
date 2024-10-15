<?php
class MDParser{
	public function parse($text){
		if(str_starts_with($text,"# ")){
			$noCodeText=str_replace("# ","",$text);
			echo "<h1>".$noCodeText."</h1>";
		}elseif(str_starts_with($text,"## ")){
			$noCodeText=str_replace("## ","",$text);
			echo "<h2>".$noCodeText."</h2>";
		}elseif(str_starts_with($text,"### ")){
			$noCodeText=str_replace("### ","",$text);
			echo "<h3>".$noCodeText."</h3>";
		}elseif(str_starts_with($text,"#### ")){
			$noCodeText=str_replace("#### ","",$text);
			echo "<h4>".$noCodeText."</h4>";
		}elseif(str_starts_with($text,"##### ")){
			$noCodeText=str_replace("##### ","",$text);
			echo "<h5>".$noCodeText."</h5>";
		}elseif(str_starts_with($text,"###### ")){
			$noCodeText=str_replace("###### ","",$text);
			echo "<h6>".$noCodeText."</h6>";
		}elseif(str_starts_with($text,"**")&&str_ends_with($text,"**")){
			$noCodeText=str_replace("**","",$text);
			echo "<strong>".$noCodeText."</strong>";
		}elseif(str_starts_with($text,"__")&&str_ends_with($text,"__")){
			$noCodeText=str_replace("__","",$text);
			echo "<strong>".$noCodeText."</strong>";
		}elseif(str_starts_with($text,"*")&&str_ends_with($text,"*")){
			$noCodeText=str_replace("*","",$text);
			echo "<em>".$noCodeText."</em>";
		}elseif(str_starts_with($text,"``")&&str_ends_with($text,"``")){
			$noCodeText=str_replace("``","",$text);
			echo "<code>".$noCodeText."</code>";
		}elseif(str_starts_with($text,"<")&&str_ends_with($text,">")){
			$noCodeText=str_replace("<","",$text);
			$noCodeText=str_replace(">","",$noCodeText);
			echo "<a href=\"".$noCodeText."\">".$noCodeText."</a>";
		}elseif(str_starts_with($text,"!(")&&str_ends_with($text,")")){
			$noCodeText=str_replace("!(","",$text);
			$noCodeText=str_replace(")","",$noCodeText);
			echo "<img src=\"".$noCodeText."\">";
		}
	}
}
?>