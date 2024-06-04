import Textbox from "../atoms/Textbox";
import Label from "../atoms/Label";

type Props = {
  className?: string;
};

const Textarea = (props: Props) => {
  return (
    <div className={` ${props.className}`}>
      <Label>content</Label>
      <Textbox />
    </div>
  );
};

export default Textarea;
