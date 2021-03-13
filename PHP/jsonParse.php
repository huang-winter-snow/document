class jsonParse
{
    public $tokenType = ['{', '}', '[', ']', ':', ',', '"'];

    public $data = [];

    public $key = '';

    public $colon = null;

    function __construct($express = '{"a": [{"b": "c"}, "d"], "x": 1}')
    {
        $this->data = $this->parseColon($express);

        $this->iteratorData($this->data);
    }

    public function parseColon($express, $level = 0)
    {
        $this->key = '';

        $data = [];
        $stack = new SplStack();

        $length = strlen($express);
        $i = 0;
        $lastIndex = $length - 1;

        $temp = '';
        while (true) {
            if ($i === 0) {
                $i++;

                continue;
            }

            $char = $express[$i];

            if (in_array($char, $this->tokenType, true) && $char != ',' && $char != ':') {
                if ($stack->isEmpty()) {
                    $stack->push($char);
                } else if ($stack->top() == $char) {
                    $stack->pop();
                } else if ($stack->top() == '[' && $char == ']') {
                    $stack->pop();
                } else if ($stack->top() == '{' && $char == '}') {
                    $stack->pop();
                } else {
                    $stack->push($char);
                }
            }

            if ($stack->isEmpty() && $char == ':') {
                $this->key = trim($temp);
                $data[$this->key] = '';

                $this->colon = ':';

                $temp = '';

                $i++;

                continue;
            }

            if ($stack->isEmpty() && $char == ',') {
                if ($this->key == '') {
                    $data[] = trim($temp);
                } else {
                    $data[$this->key] = trim($temp);
                }

                $this->key = '';

                $temp = '';

                $this->colon = null;

                $i++;

                continue;
            }

            if ($i == $lastIndex) {
                if ($this->key == '') {
                    $data[] = trim($temp);
                } else {
                    $data[$this->key] = trim($temp);
                }

                break;
            }

            if ($this->colon === null && in_array($char, $this->tokenType)) {
                $i++;
                continue;
            }

            $temp .= $char;

            $i++;
        }

        return $data;
    }

    public function iteratorData(&$data)
    {
        foreach ($data as $key => &$item) {
            if ($item[0] == '{' || $item[0] == '[') {
                $item = $this->parseColon($item);

                if (is_array($item)) {
                    $this->iteratorData($item);
                }
            }
        }

        unset($item);
    }
}
