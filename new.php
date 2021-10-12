<!DOCTYPE html>
<html>
<body>
	String evaluate()
	{
		string input="{123,' qwerty', 'abc'}";
		string negex="[a-ZA-z]+(@[4-9]){8}";

	}
if(input.matches(negex))
{
	if(input.contains('qwerty'))
	break;
	else if(input.contains('123'))
	break;
	else if(input.contains('abc'))
	break;
	else
	return true;
}
</body>
</html>

