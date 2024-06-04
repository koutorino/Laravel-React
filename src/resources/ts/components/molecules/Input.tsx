import InputBox from "../atoms/InputBox";
import Label from "../atoms/Label";

type Props = {
  className?: string;
};

const Input = (props: Props) => {
  return (
    <div className={`${props.className}`}>
      <Label>title</Label>
      <InputBox />
    </div>
  );
};

export default Input;
